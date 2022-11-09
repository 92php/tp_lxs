<?php
/* 信息展示 */
class NewsAction extends CommonAction{
	/* 内容显示 */
	Public function index(){
		/* p($_GET);die; */
		if($this->isGet()){
			if($_GET['id']){
			$db	=	M('news');
			$data = $db->find($_GET['id']);
			$data['content']=htmlspecialchars_decode($data['content']);
			/* p($data);die; */
			/* 上一篇文章 */
			$id=$_GET['id']-1;
			$this->prev=$db->find($id);
			/* 下一篇文章 */
			$id=$_GET['id']+1;
			$this->next=$db->find($id);
			$this->assign('list',$data);
			$this->display('jingdian_show');
			}else{
			$this->error('您访问的页面不存在');
			}
		}else{
		$this->error('页面不存在');
		}
	}

}

?>