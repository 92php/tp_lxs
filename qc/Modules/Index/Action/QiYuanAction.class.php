<?php
/*
这是前端控制器！
*/
class QiYuanAction extends CommonAction{
	public function index(){
		$db	=	M('qiyuan');
			/* p($str);die; */
			import('ORG.Util.Page');// 导入分页类
			$count      = $db->count('*');// 查询满足要求的总记录数
			$Page       = new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $db->order('addtime DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出      //输出页码
		$this->display('xuyuan');
	}
	public function handle(){
		//$this->isAjax();
		//print_r($_POST);
		if(!$this->isPost()) _404('坑爹呀，页面不存在！',U('index'));//判断是否为POST传值，如果不是输出404页面！
		$yzm=$_POST['yzm'];
		if($_SESSION['verify']!=md5($yzm)){
			$this->error('验证码错误！');
		}
		$db=M('qiyuan');
		/*
		开始接受数据
		*/
		$data=array(
			'foname'=>$this->_post('foname'),
			'dzname'=>$this->_post('username'),
			'gong'=>$this->_post('xiang'),
			'addtime'=>time(),
			'hua'=>$this->_post('hua').$this->_post('guo'),
			'location'=>$this->_post('location'),
			'ding'=>$this->_post('ding'),
			'content'=>$this->_post('content'),
		
		);
		//敏感字替换
		$arr=array('胡锦涛','习近平','温家宝','李克强','贺国强','小姐','卖枪','冰毒','裸聊','admin','柳英伟');
		$data=str_replace($arr,'***',$data);
		/* p($_POST);die; */
		
		if($id=$db->data($data)->add()){
			$this->success('祈愿成功，'.$this->_post("foname").'已收到你的祈愿');
		}else{
			$this->error('祈愿失败');
		}
	}
	//引入验证码
	public function yzm(){
		import('ORG.Util.Image');
		Image::buildImageVerify(4,1,'png',70,25);
	}


}//end


?>