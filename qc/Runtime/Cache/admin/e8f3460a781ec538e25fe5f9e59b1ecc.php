<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>新增酒店</title>
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
		<span>修改酒店</span>
	</div>
	<form action="<?php echo U('sendHote');?>" method='post'>
		<table class="table">
			<tr>
				<td width='25%' align='right'>酒店名称：</td>
				<td>
					<input type="text" name='title' value="<?php echo ($hotel["0"]["title"]); ?>"/>
				</td>
			</tr>
			<tr>
				<td align="right">酒店档次：</td>
				<td>
					<select name="grade" id="" >
					<option value="<?php echo ($hotel["0"]["grade"]); ?>"><?php echo ($hotel["0"]["grade"]); ?></option>
						<option value="快捷酒店">快捷酒店</option>
						<option value="一星级">一星级(*)</option>
						<option value="二星级">二星级(**)</option>
						<option value="三星级">三星级(***)</option>
						<option value="四星级">四星级(****)</option>
						<option value="五星级">五星级(*****)</option>
						<option value="六星级">六星级(******)</option>
						<option value="七星级">七星级(*******)</option>
					
					</select>
					
				</td>
			</tr>
			<tr>
				<td align="right">价格范围：</td>
				<td>
					<select name="fanwei" id="">
					<option value="<?php echo ($hotel["0"]["fanwei"]); ?>"><?php echo ($hotel["0"]["fanwei"]); ?></option>
						<option value="100以下">100以下</option>
						<option value="100-300">100-300</option>
						<option value="300-500">300-500</option>
						<option value="500-700">500-700</option>
						<option value="700-1000">700-1000</option>
						<option value="1100-1500">1100-1500</option>
						<option value="1600-1800">1600-1800</option>
						<option value="1900-2000">1900-2000</option>
						<option value="2000以上">2000以上</option>
					
					</select>
					
				</td>
			</tr>
			
			<tr>
				<td align='right'>酒店价格：</td>
				<td>
					<input type="text" name='price' value="<?php echo ($hotel["0"]["price"]); ?>" />
				</td>
			</tr>
			<tr>
				<td align='right'>酒店地域：</td>
				<td>
					<select name="location" id="">
						<option value="<?php echo ($hotel["0"]["location"]); ?>"><?php echo ($hotel["0"]["location"]); ?></option>
						<option value="太原市">太原市</option>
						<option value="大同市">大同市</option>
						<option value="阳泉市">阳泉市</option>
						<option value="长治市">长治市</option>
						<option value="晋城市">晋城市</option>
						<option value="朔州市">朔州市</option>
						<option value="晋中市">晋中市</option>
						<option value="运城市">运城市</option>
						<option value="忻州市">忻州市</option>
						<option value="临汾市">临汾市</option>
						<option value="吕梁市">吕梁市</option>
					</select>
				</td>
			</tr>
			<tr>
				<td align='right'>酒店预览：</td>
				<td>
					
					<input type="file" name='pic' id='pic' />
					<input type="hidden" name='face180' value=''/>
                    <input type="hidden" name='face80' value=''/>
                    <input type="hidden" name='face50' value=''/>
				</td>
				
			</tr>
			
			<tr>
				<td colspan="2" width='10%'>
					<textarea id='content' name='content' cols="140" rows="30"><?php echo ($hotel["0"]["content"]); ?></textarea>
				</td>
			</tr>
			<tr>
				<td colspan='2'>
					<input type="hidden" name='id' value='<?php echo ($hotel["0"]["id"]); ?>'/>
					<input type="hidden" name='face180' value='<?php echo ($hotel["0"]["max"]); ?>'/>
                    <input type="hidden" name='face80' value='<?php echo ($hotel["0"]["medium"]); ?>'/>
                    <input type="hidden" name='face50' value='<?php echo ($hotel["0"]["mini"]); ?>'/>
					<input type="submit" value='确认修改'  class='big-btn'/>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>