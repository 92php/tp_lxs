<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>修改租车</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<link rel="stylesheet" href="__PUBLIC__/Uploadify/uploadify.css"/>
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/pic.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Uploadify/jquery.uploadify.min.js'></script>
	<link rel="stylesheet" href="__PUBLIC__/editor/themes/default/default.css" />
	<script type='text/javascript'>
		var PUBLIC = '__PUBLIC__';
		var uploadUrl = '<?php echo U("Common:uploadPic");?>';
		var sid = '<<?php echo session_id();?>>';
		var UPLOAD = '__UPLOAD__';
    </script>
<script type='text/javascript'>
	window.UEDITOR_HOME_URL = '__ROOT__/Data/Ueditor/';
	window.onload = function (){
		window.UEDITOR_CONFIG.initialFrameWidth=1200;
		window.UEDITOR_CONFIG.initialFrameHeight=600;
		window.UEDITOR_CONFIG.imageUrl="<?php echo U(GROUP_NAME.'/Hotel/upload');?>"             //图片上传提交地址
        window.UEDITOR_CONFIG.imagePath='__ROOT__/uploads/';  
		UE.getEditor("content");
	}
</script>
<script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.all.min.js"></script>
</head>
<body>
	<div class='status'>
		<span>修改商品</span>
	</div>
	<form action="<?php echo U('sendsaveGoods');?>" method='post'>
		<table class="table">
			<tr>
				<td width='25%' align='right'>商品名称：</td>
				<td>
					<input type="text" name='name' value="<?php echo ($Goods["0"]["name"]); ?>" />
				</td>
			</tr>
			<tr>
				<td align="right">库存数量：</td>
				<td>
					<input type="text" name='total' value="<?php echo ($Goods["0"]["total"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td align='right'>商品价格：</td>
				<td>
					<input type="text" name='price' value="<?php echo ($Goods["0"]["price"]); ?>" />
				</td>
			</tr>
			<tr>
				<td align='right'>商品类型：</td>
				<td>
					<select name="typeid" id="">
					<option value="">请选择</option>
					
						<?php if(is_array($alist)): $i = 0; $__LIST__ = $alist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo['id']); ?>">
						<?php echo ($vo['tname']); ?>
						</option><?php endforeach; endif; else: echo "" ;endif; ?>
						
					
					</select>
						<p style="font:15px;color:red;margin-left:100px;margin-top:-20px;">别忘记选择哦</p>
				</td>
			</tr>
			<tr>
				<td align='right'>配送方式：</td>
				<td>
					<input type="text" name='post'  value="<?php echo ($Goods["0"]["post"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td align='right'>推荐首页：</td>
				<td>
					<input type="radio" name='remed' value='1'  <?php if($Goods["0"]["remed"]): ?>checked='checked'<?php endif; ?>/>推荐&nbsp;&nbsp;&nbsp;
					<input type="radio" name='remed' value='0' <?php if(!$Goods["0"]["remed"]): ?>checked='checked'<?php endif; ?>/>不推荐
				</td>
			</tr>
			<tr>
				<td align='right'>商品预览：</td>
				<td>
					<input type="file" name='pic' id='pic' />
					<input type="hidden" name='face180' value=''/>
                    <input type="hidden" name='face80' value=''/>
                    <input type="hidden" name='face50' value=''/>
				</td>
			</tr>
			
			<tr>
				<td colspan="2" width='10%'>
					<textarea id='content' name='note' cols="140" rows="30"><?php echo ($Goods["0"]["note"]); ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					<input type="hidden" name='id' value='<?php echo ($Goods["0"]["id"]); ?>'/>
					<input type="hidden" name='face180' value='<?php echo ($Goods["0"]["picmax"]); ?>'/>
                    <input type="hidden" name='face80' value='<?php echo ($Goods["0"]["picmedium"]); ?>'/>
					<input type="submit" value='保存修改'  class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>