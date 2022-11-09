<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>商品分类</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<body>
	<div class='status'>
		<span>商品分类</span>
		<span style="margin-right:10px;"><a href='addGoodsType'>添加分类</a></span>
	</div>
	<table class="table">
		<tr>
			
			<th>ID</th>
			<th>分类名称</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($alist)): foreach($alist as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["tname"]); ?></td>
				<td style="width:165px;">
					<div style="width:160px; margin:auto;">
					<a href="<?php echo U('delGoodsType', array('id' => $v['id']));?>" class='del'></a>
					<a href="<?php echo U('addGoodsType', array('id' => $v['id']));?>" class='mod'></a>
					</div>
				</td>
			</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan='8' align='center' height='60'><?php echo ($page); ?></td>
		</tr>
	</table>
</body>
</html>