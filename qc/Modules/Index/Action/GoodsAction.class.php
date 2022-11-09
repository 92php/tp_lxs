<?php
/* 商城控制器 */
class GoodsAction extends CommonAction{
	/* 视图输出 */
	Public function index(){
		$db	=	M('goods');
			/* p($str);die; */
			import('ORG.Util.Page');// 导入分页类
			$count      = $db->count('*');// 查询满足要求的总记录数
			$Page       = new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $db->order('addtime DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出      //输出页码
		$this->display('shop');
	
	}
	/* 内容显示 */
	Public function shopShow(){
		if($this->isGet()){
			if($_GET['id']){
			$db	=	M('goods');
			$data = $db->find($_GET['id']);
			$data['note']=htmlspecialchars_decode($data['note']);
			/* p($data);die; */
			/* 上一篇文章 */
			$id=$_GET['id']-1;
			$this->prev=$db->find($id);
			/* 下一篇文章 */
			$id=$_GET['id']+1;
			$this->next=$db->find($id);
			$this->tuijie= $db->where(array('remed'=>'1'))->select();
			$this->assign('list',$data);
			$this->display('shop_show');
			}else{
			$this->error('您访问的页面不存在');
			}
		}else{
		$this->error('页面不存在');
		}
	}
	/* 商品购买 */
	Public function goodsYud(){
		if($this->isPost()){
			if(!empty($_POST)){
				$data=array(
					'type'=>$this->_post('type'),
					'note'=>'备注：'.$this->_post('note').'<br/>'.'价格：'.$this->_post('price').'元',
					'price'=>$this->_post('price'),
					'name'=>$this->_post('title'),
					'contact'=>$this->_post('name'),
					'tel'=>$this->_post('phone'),
					'number'=>$this->_post('shu').'件',
					'addtime'=>time(),
					'booknum'=>date('Ymd',time()).rand('0','99'),
					'action'=>$this->_post('dizhi'),
					'bookstatus'=>0,
					'buystatus'=>0,
				
				);
				$data['allprice']=$this->_post('price')*$this->_post('shu');
				if(M('book')->add($data)){
					$this->success('订购成功，请移步至订单中心支付！');
				}else{
					$this->error('订购失败');
				}
			}
		
		}
		
	}

}

?>