<?php
/* 预定管理控制器 */
class BookAction extends CommonAction{
	/* 预定列表 */
	Public function index(){
		$db	=	M('book');
			/* p($str);die; */
			import('ORG.Util.Page');// 导入分页类
			$count      = $db->count('*');// 查询满足要求的总记录数
			$Page       = new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $db->order('addtime DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('show',$show);// 赋值分页输出      //输出页码
		$this->display();
	}
	/* 修改订单状态 */
	Public function saveBook(){
			$w=$_GET['id'];
			$data=array('bookstatus'=>1);
			$db=M('Book');
			$buystatus = $db->where(array('id'=>$w))->getField('buystatus');
			if($buystatus){
				if($db->where(array('id'=>$w))->setField($data)){
					$this->success('修改成功',U('index'));
				}else{
					$this->error('修改失败');
				}
			}else{
				$this->error('修改失败,请等待买家付款');
			}
		
	
	}
	/* 删除订单 */
	Public function delBook(){
		$w=array('id'=>$_GET['id']);
		if(M('Book')->where($w)->limit('1')->delete()){
			$this->success('删除成功',U('index'));
		}else{
			$this->error('删除失败');
		}
	}

}//CLASS=====END
?>