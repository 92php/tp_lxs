<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>新增信息</title>
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
		<span>添加信息</span>
	</div>
	<form action="<?php echo U('runAddNews');?>" method='post'>
		<table class="table">
			<tr>
				<td width='25%' align='right'>信息名称：</td>
				<td>
					<input type="text" name='title' />
				</td>
			</tr>
			<tr>
				<td align="right">信息分类：</td>
				<td>
					<select name="type" id="">
					<option value="">请选择</option>
						<option value="导游服务">导游服务</option>
						<option value="佛教文化">佛教文化</option>
						<option value="购买记录">购买记录</option>
						<option value="联系我们">联系我们</option>
					
					</select>
					
				</td>
			</tr>
			<tr>
				<td colspan="2" width='10%'>
					<textarea id='content' name='content' cols="140" rows="30"></textarea>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					
					<input type="submit" value='确认添加'  class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>