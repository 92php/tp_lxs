<?php
/* 广告管理控制器 */
class AdverAction extends CommonAction{
	/* 广告列表 */
	Public function index(){
		$db=M('Adver');
		$list=$db->order('addtime','DESC')->select();
		import('ORG.Util.Page');// 导入分页类
		$count      = $db->count('*');// 查询满足要求的总记录数
		$Page       = new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $db->order('addtime')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('show',$show);// 赋值分页输出      //输出页码
		$this->display();
	}
	/* 添加广告 */
	Public function addAdver(){
		$this->display();
	}
	/* 表单处理 */
	Public function runAddAdver(){
		if(!$this->isPost()){
			halt('页面不存在');
		} 
			$data=array(
				'name'=>$this->_post('name'),
				'startime'=>$this->_post('startime'),
				'endtime'=>$this->_post('endtime'),
				'option'=>$this->_post('option'),
				'addtime'=>time(),
				'max'=>$this->_post('face180'),
				'medium'=>$this->_post('face80'),
				'mini'=>$this->_post('face50')
			);
			if($hid=M('Adver')->data($data)->add()){ 
				
				$this->success('发布成功','index');	
			}else{
				$this->error('发布失败');
			}
	}
	/* 广告编辑 */
	Public function saveAdver(){
		if(!$this->isGet()){
			halt('页面不存在');
		}
		$id=$_GET['id'];
		$w=array('id'=>$id);
		$db=M('Adver');
		$Adver=$db->where($w)->select();
		/* p($hotel);die; */
		$this->assign('Adver',$Adver);
		$this->display();
	}
	/* 广告编辑接受表单 */
	Public function sendAdver(){
		if (!$this->isPost()) {
			halt('页面不存在');
		}
		$data=array(
				'name'=>$this->_post('name'),
				'startime'=>$this->_post('startime'),
				'endtime'=>$this->_post('endtime'),
				'option'=>$this->_post('option'),
				'addtime'=>time(),
				'max'=>$this->_post('face180'),
				'medium'=>$this->_post('face80'),
				'mini'=>$this->_post('face50')
			);
			/* p($data);die; */
		$db = M('Adver');
		$where=array('id'=>$this->_post('id'));
		if ($db->where($where)->save($data)) {
			$this->success('修改成功', U('index'));
		} else {
			$this->error('修改失败，请重试...');
		}
	}
	/* 广告删除 */
	Public function delAdver(){
		$w=array('id'=>$_GET['id']);
		if(M('Adver')->where($w)->limit('1')->delete()){
			$this->success('删除成功',U('index'));
		}else{
			$this->error('删除失败');
		}
	}
}//===CLASS===END


?>