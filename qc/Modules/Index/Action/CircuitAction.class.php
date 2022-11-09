<?php
/* 线路管理控制器 */
class CircuitAction extends CommonAction{
	/* 线路预定视图 */
	Public function index(){
		$db	=	M('Circuit');
			/* p($str);die; */
			import('ORG.Util.Page');// 导入分页类
			$count      = $db->count('*');// 查询满足要求的总记录数
			$Page       = new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $db->order('addtime DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出      //输出页码
		$this->display('xianlu');
	}
	/* 内容显示 */
	Public function cirShow(){
		if($this->isGet()){
			if($_GET['id']){
			$db	=	M('Circuit');
			$data = $db->find($_GET['id']);
			$data['content']=htmlspecialchars_decode($data['content']);
			/* 上一篇文章 */
			$id=$_GET['id']-1;
			$this->prev=$db->find($id);
			/* 下一篇文章 */
			$id=$_GET['id']+1;
			$this->next=$db->find($id);
			/* p($data);die; */
			$this->tuijie= M('Circuit')->where(array('remed'=>'1'))->select();
			$this->assign('list',$data);
			$this->display('xianlu_show');
			}else{
			$this->error('您访问的页面不存在');
			}
		}else{
		$this->error('页面不存在');
		}
	}
		/* 线路预定 */
	Public function ciryud(){
		if($this->isPost()){
			if(!empty($_POST)){
				$data=array(
					'type'=>$this->_post('type'),
					'note'=>'备注：'.$this->_post('note'),
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