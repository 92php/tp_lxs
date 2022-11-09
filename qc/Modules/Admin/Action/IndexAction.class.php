<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
		$this->display();
    }
		/**
	 * 后台信息页
	 */
	Public function copy () {
		$db = M('indexuser');
		$this->user = $db->count();
		$this->lock = $db->where(array('lock' => 1))->count();
		
		$jdcount=M('Book')->where(array('type'=>'酒店订单'))->count();
		$this->assign('jdcount',$jdcount);
		
		$xlcount=M('Book')->where(array('type'=>'线路订单'))->count();
		$this->assign('xlcount',$xlcount);
		
		$zccount=M('Book')->where(array('type'=>'租车订单'))->count();
		$this->assign('zccount',$zccount);
		
		$count=M('Book')->count();
		$this->assign('count',$count);
	
		$this->display();
	}
	/* 退出登录 */
	Public function loginOut(){
		//卸载SESSION
		session_unset();
		session_destroy();
		
		//跳转到登录页
		header('Content-Type:text/html;Charset=UTF-8');
		redirect(U('Login/index'),1,'退出成功，正在跳转...');
	}
	
}/***************CLASS****END********************/