<?php
// 前台首页控制器
class IndexAction extends CommonAction {
    /* 首页视图 */
	public function index(){
		
		if($status['WEB_ON']==0){
		$this->cookie=$_COOKIE['user'];
		$this->hotel=M('hotel')->select();
		$this->news=M('news')->where(array('type'=>'导游服务'))->order('addtime DESC')->select();
		$this->wenhua=M('news')->where(array('type'=>'佛教文化'))->order('addtime DESC')->select();
		$this->jilu=M('news')->where(array('type'=>'购买记录'))->order('addtime DESC')->select();
		$this->car=M('Carhire')->order('addtime DESC')->select();
		$this->shop=M('goods')->order('addtime DESC')->select();
		$this->adv=M('Adver')->where(array('option'=>'幻灯片'))->select();
		$this->banner=M('Adver')->where(array('option'=>'banner'))->select();
		$this->advcount= M('Adver')->where(array('option'=>'幻灯片'))->count();
		$this->huad= M('circuit')->order('addtime DESC')->where(array('region'=>'华东地区路线'))->select();
		$this->huab= M('circuit')->order('addtime DESC')->where(array('region'=>'华北地区路线'))->select();
		$this->dongb= M('circuit')->order('addtime DESC')->where(array('region'=>'东北地区路线'))->select();
		$this->huaz= M('circuit')->order('addtime DESC')->where(array('region'=>'华中地区路线'))->select();
		$this->huan= M('circuit')->order('addtime DESC')->where(array('region'=>'华南地区路线'))->select();
		$this->ganga= M('circuit')->order('addtime DESC')->where(array('region'=>'港/澳/台路线'))->select();
		$this->Attractions= M('attractions')->order('addtime DESC')->select();
		$this->Buddhist= M('Buddhist')->order('addtime DESC')->select();
		$this->display();
		}else{
			echo '对不起，站点已关闭！';
		}
    }
	
	/* 重置密码 */
	Public function editPwd(){
		$this->display();
	}
	Public function runEditPwd(){
		if (!$this->isPost()) {
			halt('页面不存在');
		}

		$db = M('indexuser');
		//验证手机
		$where = array('email' =>$this->_post('email'));
		$phone = $db->where($where)->getField('phone');
		
		if ($this->_post('phone') != $phone) {
				$this->error('您输入的手机号码不正确');
		}

		if ($this->_post('pwd') != $this->_post('repwd')) {
			$this->error('两次密码不一致');
		}

		$newPwd = $this->_post('repwd', 'md5');
		$data = array(
			'password' => $newPwd
			);

		if ($db->where(array('email' =>$this->_post('email')))->data($data)->save()) {
			$this->success('密码重置成功','__APP__/Login/index');
		} else {
			$this->error('密码重置失败，请重试...');
		}
	}
	/* 
	*注册页面
	*/
	Public function register(){
		$status=M('system')->getField('REGIS_ON');
		if($status['0']['REGIS_ON']==1){
			$this->display('register');
		}else{
			echo '对不起，站点已关闭注册！';
		}
	}
	/**
	*注册表单处理
	*/
	Public function runRegis(){
		if(!$this->isPost()){
			halt('非法访问！');
		}
		/* if($_SESSION['verify']!=md5($_POST['verify'])){
			$this->error('验证码错误！');
		} */
		if(!empty($_POST['email'])){
			if($_POST['pwd']!=$_POST['repwd']){
				$this->error('俩次密码不一致！');
			}
			$yz=M('indexuser')->where(array('email'=>$_POST['email']))->select();
			if($yz){
				$this->error('邮箱已存在，请更换后重试...');
			}
			//提取POST数据
			$data=array(
				'phone'=>$this->_post('phone'),
				'password'=>$this->_post('pwd','md5'),
				'registime'=>$_SERVER['REQUEST_TIME'],
				'userid'=>date('Ymd',time()).rand('0','999'),
				'truename'=>$this->_post('name'),
				'email'=>$this->_post('email'),
				'sex'=>$this->_post('sex'),
				'QQ'=>$this->_post('qq'),
				'lock'=>0
				
			);
			/* p($data);die; */
			//插入数据
			$id=M('indexuser')->data($data)->add();
			if($id){
				//插入数据成功后把用户ID写入cookie
				cookie("user",$_POST['name'],86400*30);
				header('Content-Type:text/html;Charset=UTF-8');
				redirect(__APP__,3,'注册成功，正在跳转...');
			}else{
				$this->error('注册失败，请重试...');
			}
		}else{
			$this->error('数据不完整，请补充');
		}
	}
	/* 异步验证账号是否存在 */
	Public function checkAccount(){
		if($this->isAjax()){
			halt('页面不存在');
		}
		$email=$this->_post('email');
		$where=array('email'=>$email);
		
			if(M('indexuser')->where($where)->getField('id')){
				echo 'false';
			}else{
				echo 'true';
			}
	
	}
}//CLASS----END