<?php
/* 前台酒店控制器 */
class HotelAction extends CommonAction{
	/* 模版视图 */
	Public function index(){
		$db	=	M('hotel');
			/* p($str);die; */
			import('ORG.Util.Page');// 导入分页类
			$count      = $db->count('*');// 查询满足要求的总记录数
			$Page       = new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $db->order('addtime DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出      //输出页码
		$this->display('hotel');
	}
	/* 首页酒店预定 */
	Public function inyud(){
		if(!isset($_COOKIE['user'])||!isset($_COOKIE['phone'])){
			redirect(U('Login/index'));
		}
		if($this->isPost()){
			if(!empty($_POST['endtime'])&&!empty($_POST['startime'])){
				/* 根据酒店名称查处价格 */
				$price=M('hotel')->where(array('title'=>$this->_post('title')))->getField('price');
				$data=array(
					'type'=>$this->_post('type'),
					'note'=>'入住时间：'.$this->_post('startime').'<br/>'.'退房时间：'.$this->_post('endtime'),
					'name'=>$this->_post('title'),
					'price'=>$price,
					'contact'=>$this->_post('name'),
					'tel'=>$this->_post('phone'),
					'number'=>$this->_post('dady'),
					'addtime'=>time(),
					'booknum'=>date('Ymd',time()).rand('0','99'),
					'action'=>$this->_post('dizhi'),
					'bookstatus'=>0,
					'buystatus'=>0,
				
				);
				$data['allprice']=$price*$this->_post('dady');
				if(M('book')->add($data)){
					$this->success('预定成功');
				}else{
					$this->error('预定失败');
				}
			}else{
				$this->error('预定失败，数据不能为空');
			}
		
		}
		
	}
	/* 首页酒店预定 */
	Public function hotelyud(){
		if($this->isPost()){
			if(!empty($_POST)){
				$data=array(
					'type'=>$this->_post('type'),
					'note'=>'入住时间：'.$this->_post('startime').'<br/>'.'退房时间：'.$this->_post('endtime'),
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
					$this->success('预定成功');
				}else{
					$this->error('预定失败');
				}
			}
		
		}
		
	}
	/* 内容显示 */
	Public function hotelShow(){
		if($this->isGet()){
			if($_GET['id']){
			$db	=	M('hotel');
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
			$this->display('hotel_show');
			}else{
			$this->error('您访问的页面不存在');
			}
		}else{
		$this->error('页面不存在');
		}
	}
	/* 分类列表 */
	Public function hotelList(){
		if($this->isGet()){
			if($_GET['location']){
			$str='';
			switch($_GET['location']){
				case 1:$str='太原市';break;
				case 2:$str='大同市';break;
				case 3:$str='阳泉市';break;
				case 4:$str='长治市';break;
				case 5:$str='晋城市';break;
				case 6:$str='朔州市';break;
				case 7:$str='晋中市';break;
				case 8:$str='运城市';break;
				case 9:$str='忻州市';break;
				case 10:$str='临汾市';break;
				case 11:$str='吕梁市';break;
			}
			$db	=	M('hotel');
			/* p($str);die; */
			import('ORG.Util.Page');// 导入分页类
			$count      = $db->where(array('location'=>$str))->count('*');// 查询满足要求的总记录数
			$Page       = new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $db->where(array('location'=>$str))->order('addtime')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出      //输出页码
			$this->display('huiyi_list');
			}else{
			$this->error('您访问的页面不存在');
			}
		}else{
		$this->error('页面不存在');
		}
	}
}
?>