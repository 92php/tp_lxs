<?php
/* 会议管理控制器 */
class CategoryAction extends CommonAction{
	/* 会议列表视图 */
	Public function index(){
		$db=M('category');
		$this->xuanzhi=$db->where(array('fenlei'=>'会议选址'))->select();
		$this->cehua=$db->where(array('fenlei'=>'会议策划'))->select();
		$this->jiedai=$db->where(array('fenlei'=>'会议接待'))->select();
		$this->jiudian=$db->where(array('fenlei'=>'会议酒店'))->select();
		$this->sheshi=$db->where(array('fenlei'=>'会议设施'))->select();
		/* p($jiudian);die; */
		$this->display('huiyi');
	}
	/* 会议预定 */
	Public function cateYud(){
		if($this->isPost()){
			if(!empty($_POST)){
				$data=array(
					'type'=>$this->_post('type'),
					'note'=>'参会时间：'.$this->_post('startime').'<br/>'.'备注：'.$this->_post('note'),
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
	/* 内容显示 */
	Public function cateShow(){
		if($this->isGet()){
			if($_GET['id']){
			$db	=	M('category');
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
			$this->display('huiyi_show');
			}else{
			$this->error('您访问的页面不存在');
			}
		}else{
		$this->error('页面不存在');
		}
	}
	/* 分类列表 */
	Public function cateList(){
		if($this->isGet()){
			if($_GET['fenlei']){
			$str='';
			switch($_GET['fenlei']){
				case 1:
					$str='会议选址';
					break;
				case 2:
					$str='会议策划';
					break;
				case 3:
					$str='会议接待';
					break;
				case 4:
					$str='会议酒店';
					break;
				case 5:
					$str='会议设施';
					break;
			}
			$db	=	M('category');
			/* p($str);die; */
			import('ORG.Util.Page');// 导入分页类
			$count      = $db->where(array('fenlei'=>$str))->count('*');// 查询满足要求的总记录数
			$Page       = new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $db->where(array('fenlei'=>$str))->order('addtime')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出      //输出页码
			$this->display('huiyi_list');
			}else{
			$this->error('页面无法显示');
			}
		}else{
		$this->error('页面不存在');
		}
	}
}

?>