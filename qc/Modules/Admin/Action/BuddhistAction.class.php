<?php
/*
 *佛事管理控制器 
 *
 */
class BuddhistAction extends CommonAction{
	/* 佛事列表视图 */
	Public function index(){
		$db=M('buddhist');
		$list=$db->order('addtime')->select();
		import('ORG.Util.Page');// 导入分页类
		$count      = $db->count('*');// 查询满足要求的总记录数
		$Page       = new Page($count,3);// 实例化分页类 传入总记录数和每页显示的记录数
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $db->order('addtime')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出      //输出页码
		//p($list);
		$this->display();
	}
	/* 新增佛事 */
	Public function addBuddhist(){
		$this->display();
	}
	/* 添加佛事表单接受处理 */
	Public function runBuddhist(){
		if(!$this->isPost()){
			halt('页面不存在');
		}
		if($_POST['title']!=''&&$_POST['about']!=''&&$_POST['content']!=''){
			//p($_POST);die; 
			
			$data=array(
				'title'=>$this->_post('title'),
				'about'=>$this->_post('about'),
				'remed'=>$this->_post('remed'),
				'content'=>$this->_post('content'),
				'addtime'=>time(),
				'max'=>$this->_post('face180'),
				'medium'=>$this->_post('face80'),
				'mini'=>$this->_post('face50')
				
			);
				//p($data);die; 
				$db=M('buddhist');
				$xid=$db->data($data)->add();
			if($xid!=false){
				$this->success('发布成功','index');
			}else{
				$this->error('发布失败');
			}
		}else{
			$this->error('数据不能为空');
		}
	}
	/* 佛事编辑 */
	Public function saveBuddhist(){
		if(!$this->isGet()){
			halt('页面不存在');
		}
		$id=$_GET['id'];
		$w=array('id'=>$id);
		$db=M('buddhist');
		$buddhist=$db->where($w)->select();
		/* p($hotel);die; */
		$this->assign('buddhist',$buddhist);
		$this->display();
	}
	/* 佛事编辑接受表单 */
	Public function sendBuddhist(){
		if(!$this->isPost()){
			halt('页面不存在');
		}
		if(empty($_POST)){
			$this->error('请插入数据再提交');
		}else{
		/* p($_POST);die; */
		$data=array(
				'title'=>$this->_post('title'),
				'about'=>$this->_post('about'),
				'remed'=>$this->_post('remed'),
				'content'=>$this->_post('content'),
				'addtime'=>time(),
				'max'=>$this->_post('face180'),
				'medium'=>$this->_post('face80'),
				'mini'=>$this->_post('face50')
				
			);
		$w=array('id'=>$this->_post('id'));
		$db=M('buddhist');
		
		if($db->where($w)->save($data)){
			$this->success('修改成功',U('index'));
		}else{
			$this->error('修改失败');
		}
		}
	}
	/* 佛事删除 */
	Public function delBuddhist(){
		$w=array('id'=>$_GET['id']);
		if(M('buddhist')->where($w)->limit('1')->delete()){
			$this->success('删除成功',U('index'));
		}else{
			$this->error('删除失败');
		}
	}
	/* 佛事检索 */
	Public function sechBuddhist(){
		if(isset($_GET['sech'])){
			$where=array('title'=>array('LIKE','%'.$this->_get('sech').'%'));
			//p($where);die;
			$buddhist=M('buddhist')->where($where)->select();
			$this->buddhist=$buddhist?$buddhist:false;
		}
		$this->display();
	}
	
	
	
	//编辑器上传图片处理
	public function upload(){
		import('ORG.Net.UploadFile');
		$upload= new UploadFile();
        $upload-> autoSub    =  true;// 启用子目录保存文件
        $upload-> subType    =  'date';// 子目录创建方式 可以使用hash date custom
        $upload-> dateFormat =  'Ymd';
		//$upload->savePath = './uploads/';	//图片保存路径
		$upload->thumb = true;	//生成缩略图
		$upload->thumbMaxWidth = '140,200';	//缩略图宽度
		$upload->thumbMaxHeight = '150,230';	//缩略图高度
		$upload->thumbPrefix = 'max_';	//缩略图后缀名
		$upload->thumbPath = './uploads/' . date('Y_m') . '/';	//缩略图保存图径
        if($upload->upload('./uploads/')){
			$info=$upload->getUploadFileInfo();
			import('ORG.Util.Image');
			Image::water('./uploads/'.$info[0]['savename'],'./Data/logo.png');
			echo json_encode(array(
				'url'=>$info[0]['savename'],
				'title'=>htmlspecialchars($_POST['pictitle'], ENT_QUOTES),
				'original'=>$info[0]['name'],
				'state'=>'SUCCESS',
				'path' => array(
					'max' => $pic[0] . '/max_' . $pic[1]
					)
			));
		}else{
			echo json_encode(array(
				'state'=>$upload->getErrorMsg()
			));
		
		}

	}
}/*********CLASS****END***********************/


?>