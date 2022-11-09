<?php
/* 佛事活动控制器 */
class BuddhistAction extends CommonAction{
	/* 列表视图 */
	Public function index(){
		$db=M('Buddhist');
		$list=$db->order('addtime')->select();
		import('ORG.Util.Page');// 导入分页类
		$count      = $db->count('*');// 查询满足要求的总记录数
		$Page       = new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $db->order('addtime')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('Budd',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出      //输出页码
		$this->display('foshi');
	}
	/* 内容显示 */
	Public function buddShow(){
		if($this->isGet()){
			if($_GET['id']){
			$db	=	M('Buddhist');
			$data = $db->find($_GET['id']);
			$data['content']=htmlspecialchars_decode($data['content']);
			/* p($data);die; */
			/* 上一篇文章 */
			$id=$_GET['id']-1;
			$this->prev=$db->find($id);
			/* 下一篇文章 */
			$id=$_GET['id']+1;
			$this->next=$db->find($id);
			$this->tuijie= M('Buddhist')->where(array('remed'=>'1'))->select();
			$this->assign('list',$data);
			$this->display('foshi_show');
			}else{
			$this->error('您访问的页面不存在');
			}
		}else{
		$this->error('页面不存在');
		}
	}
		/* 佛事预定 */
	Public function buddYud(){
		if($this->isPost()){
			if(!empty($_POST)){
				$data=array(
					'type'=>$this->_post('type'),
					'note'=>'参会时间：'.$this->_post('startime'),
					'name'=>$this->_post('title'),
					'contact'=>$this->_post('name'),
					'tel'=>$this->_post('phone'),
					'number'=>$this->_post('shu').'人',
					'addtime'=>time(),
					'booknum'=>date('Ymd',time()).rand('0','99'),
					'action'=>$this->_post('dizhi'),
					'bookstatus'=>0,
					'buystatus'=>1,
				
				);
				if(M('book')->add($data)){
					$this->success('预定成功');
				}else{
					$this->error('预定失败');
				}
			}
		
		}
		
	}
}
?>