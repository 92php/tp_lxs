<?php
/* 信息管理控制器 */
class NewsAction extends Action{
	/* 信息列表 */
	Public function index(){
		$db=M('news');
		$list=$db->order('addtime','DESC')->select();
		import('ORG.Util.Page');// 导入分页类
		$count      = $db->count('*');// 查询满足要求的总记录数
		$Page       = new Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $db->order('addtime DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出      //输出页码
		
		$this->display();
	}
	/* 信息添加 */
	Public function addNews(){
		$this->display();
	}
	/* 信息添加表单处理 */
	Public function runAddNews(){
		if(!$this->isPost()){
			halt('页面不存在');
		}
		/* if($this->_post('type')=''; && $this->_post('title')=''; &&$this->_post('content')=''){
			$this->error('信息不能为空，请重新添加后再试！');
		} */
		/* if($this->_post('type')=''){
			$this->error('请选择分类');
		} */
			$data=array(
				'title'=>$this->_post('title'),
				'type'=>$this->_post('type'),
				'content'=>$this->_post('content'),
				'addtime'=>time(),
			);
			if($hid=M('news')->data($data)->add()){ 
				
				$this->success('发布成功','index');	
			}else{
				$this->error('发布失败');
			}
	}
	/* 信息修改 */
	Public function saveNews(){
		if(!$this->isGet()){
			halt('页面不存在');
		}
		$id=$_GET['id'];
		$w=array('id'=>$id);
		$db=M('news');
		$news=$db->where($w)->select();
		/* p($hotel);die; */
		$this->assign('news',$news);
		$this->display();
	}
	/* 信息修改表单处理 */
	Public function runSaveNews(){
		if(!$this->isPost()){
			halt('页面不存在');
		}
		if(empty($_POST)){
			$this->error('请插入数据再提交');
		}else{
		/* p($_POST);die; */
		$data=array(
			'title'=>$this->_post('title'),
				'type'=>$this->_post('type'),
				'content'=>$this->_post('content'),
				'addtime'=>time(),
		);
		$w=array('id'=>$this->_post('id'));
		$db=M('news');
		if($db->where($w)->save($data)){
			$this->success('修改成功',U('index'));
		}else{
			$this->error('修改失败');
		}
		}
	}
	/* 信息删除 */
	Public function delNews(){
		$w=array('id'=>$_GET['id']);
		if(M('news')->where($w)->limit('1')->delete()){
			$this->success('删除成功',U('index'));
		}else{
			$this->error('删除失败');
		}
	}
	/* 信息搜索 */
	Public function seachNews(){
		if(isset($_GET['sech']) && isset($_GET['type'])){
			$where=$_GET['type']? array('type'=>array('LIKE','%'.$this->_get('sech').'%')): array('title'=>array('LIKE','%'.$this->_get('sech').'%'));
			/* p($where);die; */
			$hotel=M('news')->where($where)->select();
			$this->hotel=$hotel?$hotel:false;
		}
		$this->display();
	}
}
?>