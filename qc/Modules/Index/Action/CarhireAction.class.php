<?php
/* 在线租出控制器 */
class CarhireAction extends CommonAction{
	/* 首页视图 */
	Public function index(){
		$db	=	M('Carhire');
			/* p($str);die; */
			import('ORG.Util.Page');// 导入分页类
			$count      = $db->count('*');// 查询满足要求的总记录数
			$Page       = new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $db->order('addtime DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出      //输出页码
		$this->display('zhuche');
	}
	/* 首页租车预定 */
	Public function zuyud(){
		if(!isset($_COOKIE['user'])||!isset($_COOKIE['phone'])){
			redirect(U('Login/index'));
		}
		/* p($_POST);die; */
		if($this->isPost()){
			if(!empty($_POST['endtime'])&&!empty($_POST['startime'])){
				/* 根据名称查处价格 */
				$price=M('Carhire')->where(array('title'=>$this->_post('title')))->getField('price');
				$data=array(
					'type'=>$this->_post('type'),
					'note'=>'取车时间：'.$this->_post('startime').'<br/>'.'还车时间：'.$this->_post('endtime'),
					'price'=>$price,
					'name'=>$this->_post('title'),
					'contact'=>$this->_post('name'),
					'tel'=>$this->_post('phone'),
					'number'=>$this->_post('dady').'天',
					'addtime'=>time(),
					'booknum'=>date('Ymd',time()).rand('0','99'),
					'action'=>$this->_post('dizhi'),
					'bookstatus'=>0,
					'buystatus'=>0,
				
				);
				$data['allprice']=$price*$this->_post('dady');
				if(M('book')->add($data)){
					$this->success('预定成功，请到订单中心支付定金！');
				}else{
					$this->error('预定失败');
				}
			}else{
				$this->error('预定失败，数据不能为空');
			}
		
		}
		
	}
	/* 租车预定 */
	Public function zuCheYud(){
		if($this->isPost()){
			if(!empty($_POST)){
				$data=array(
					'type'=>$this->_post('type'),
					'note'=>'取车时间：'.$this->_post('startime').'<br/>'.'还车时间：'.$this->_post('endtime').'<br/>'.'价格：'.$this->_post('price'),
					'name'=>$this->_post('title'),
					'price'=>$this->_post('price'),
					'contact'=>$this->_post('name'),
					'tel'=>$this->_post('phone'),
					'number'=>$this->_post('shu').'天',
					'addtime'=>time(),
					'booknum'=>date('Ymd',time()).rand('0','99'),
					'action'=>$this->_post('dizhi'),
					'bookstatus'=>0,
					'buystatus'=>0,
				
				);
				$data['allprice']=$this->_post('price')*$this->_post('shu');
				if(M('book')->add($data)){
					$this->success('预定成功，请到订单中心支付定金！');
				}else{
					$this->error('预定失败');
				}
			}
		
		}
		
	}
	/* 内容显示 */
	Public function carShow(){
		if($this->isGet()){
			if($_GET['id']){
			$db	=	M('Carhire');
			$data = $db->find($_GET['id']);
			$data['content']=htmlspecialchars_decode($data['content']);
			/* p($data);die; */
			/* 上一篇文章 */
			$id=$_GET['id']-1;
			$this->prev=$db->find($id);
			/* 下一篇文章 */
			$id=$_GET['id']+1;
			$this->next=$db->find($id);
			$this->tuijie= $db->where(array('remed'=>'1'))->select();
			$this->assign('list',$data);
			$this->display('zhuche_show');
			}else{
			$this->error('您访问的页面不存在');
			}
		}else{
		$this->error('页面不存在');
		}
	}
	

}
?>