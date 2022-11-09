<?php
//后台登录控制
class LoginAction extends Action{
	//后台登录模板输出
	public function index(){
		$this->display('login');
	}
	//登录方法
	public function login (){
		if(!IS_POST) _404('坑爹呀，页面不存在！');
		$yzm=$_POST['yzm'];
		$username=$_POST['username'];
		$pwd=md5($_POST['password']);
		if($_SESSION['verify']!=md5($yzm)){
			$this->error('验证码错误！');
		}
		$i=M('indexuser')->where(array('email'=>$username))->find();
		if(!$i|$i['password']!=$pwd){
			$this->error('用户名或者密码错误！');
		}
		if($i['lock']==1){
			$this->error('-_-。sorry！您的ID不合法！');
		}
		$data=array(
			'logintime'=>time(),
			'loginip'=>get_client_ip(),
			'id'=>$i['id'],
		);
		M('indexuser')->save($data);
			if(!empty($_POST['cookie'])){
				cookie("user",$i['truename'],86400*30);
				cookie("phone",$i['phone'],86400*30);
				cookie("dizhi",$i['location'],86400*30);
				cookie("dzyx",$i['email'],86400*30);
			}else{
				cookie("user",$i['truename']);
				cookie("phone",$i['phone']);
				cookie("dizhi",$i['location']);
				cookie("dzyx",$i['email']);
			}
			$this->redirect('index/Index/index');
	}
	//退出登录
	Public function loginOut(){
		cookie('user',null);
		cookie('phone',null);
		cookie('dizhi',null);
		cookie('dzyx',null);
		$this->success('退出成功，正在跳转...','__APP__');
	}
	//引入验证码
	public function yzm(){
		import('ORG.Util.Image');
		Image::buildImageVerify(4,1,'png',70,30);
	}
	
}//end



?>