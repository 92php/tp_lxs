<?php
/* 商城控制器 */
class GoodsAction extends CommonAction{
	/* 商品列表 */
	Public function index(){
		$db	=	M('goods');
			/* p($str);die; */
			import('ORG.Util.Page');// 导入分页类
			$count      = $db->count('*');// 查询满足要求的总记录数
			$Page       = new Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $db->order('addtime DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出      //输出页码
	
		$this->display();
	}
	/* 添加商品 */
	Public function addGoods(){
		$db=M('GoodsType');
		$list=$db->select();
		//var_dump($list);
		$this->assign('alist',$list);
		$this->display();
	}
	/* 添加商品表单处理 */
	Public function runAddGoods(){
		if(!empty($_POST)){
			$data=array(
				'name'=>$this->_post('name'),
				'total'=>$this->_post('total'),
				'price'=>$this->_post('price'),
				'typeid'=>$this->_post('typeid'),
				'post'=>$this->_post('post'),
				'picmedium'=>$this->_post('face80'),
				'picmax'=>$this->_post('face180'),
				'remed'=>$this->_post('remed'),
				'note'=>$this->_post('note'),
				'addtime'=>time(),
			);
			if(M('Goods')->data($data)->add()){
				$this->success('添加成功','index');
			
			}else{
				$this->error('添加失败');
			}
		}
	}
	/* 修改商品 */
	Public function saveGoods(){
		if(!$this->isGet()){
			halt('页面不存在');
		}
		$db=M('GoodsType');
		$list=$db->select();
		//var_dump($list);
		$this->assign('alist',$list);
		$id=$_GET['id'];
		$w=array('id'=>$id);
		$db=M('Goods');
		$Goods=$db->where($w)->select();
		/* p($hotel);die; */
		$this->assign('Goods',$Goods);
		$this->display();
	}
	/* 修改商品 处理*/
	Public function sendsaveGoods(){
		if(!$this->isPost()){
			halt('页面不存在');
		}
		if(empty($_POST)){
			$this->error('请插入数据再提交');
		}else{
		/* p($_POST);die; */
		$data=array(
				'name'=>$this->_post('name'),
				'total'=>$this->_post('total'),
				'price'=>$this->_post('price'),
				'typeid'=>$this->_post('typeid'),
				'post'=>$this->_post('post'),
				'picmedium'=>$this->_post('face80'),
				'picmax'=>$this->_post('face180'),
				'remed'=>$this->_post('remed'),
				'note'=>$this->_post('note'),
				'addtime'=>time(),
				
			);
		$w=array('id'=>$this->_post('id'));
		$db=M('Goods');
		
		if($db->where($w)->save($data)){
			$this->success('修改成功',U('index'));
		}else{
			$this->error('修改失败');
		}
		}
	} 
	/* 删除商品 */
	Public function delGoods(){
		$w=array('id'=>$_GET['id']);
		if(M('Goods')->where($w)->limit('1')->delete()){
			$this->success('删除成功',U('index'));
		}else{
			$this->error('删除失败');
		}
	}
	/* 商品分类列表 */
	Public function goodsType(){
		$db=M('GoodsType');
		$list=$db->select();
		//var_dump($list);
		$this->assign('alist',$list);
		$this->display();
	}
	/* 添加商品分类 */
	Public function addGoodsType(){
		$db=M('GoodsType');
		$list=$db->select();
		//var_dump($list);
		$this->assign('alist',$list);
		$this->display();
	}
	/* 添加分类处理 */
	Public function runAddGoodsType(){
		if(empty($_POST)){
			$db=M('GoodsType');
			//$a['id']=$_GET['id'];
			$a['tname']=$_GET['tname'];
			if($db->add($a)){
					$this->success('添加成功','goodsType');
			}else{
					$this->error('添加失败');
			}
		}else{
			$this->error('请填写内容');
		}
	}
	/* 商品分类 修改*/
	Public function saveGoodsType(){
		p($_GET);die;
		$a['id']=$_GET['id'];
				//
		$b['tname']=$_GET['tname'];
		if(M('GoodsType')->where($a)->save($b)){
			$this->success('更新成功','goodsType');
		}else{
			$this->error('更新失败');
		}
	
	}
	/* 商品分类 删除*/
	Public function delGoodsType(){
				$a['id']=$_GET['id'];
				
				if(M('GoodsType')->where($a)->delete()){
					$this->success('删除成功');
				}else{
					$this->error('删除失败');
				}
	}
}//=======CLASS===END

?>