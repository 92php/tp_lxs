<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>广告列表</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<body>
	<div class='status'>
		<span>广告列表</span><span><a href="addAdver">添加广告</a></span>
	</div>
	<table class="table">
		<tr>
			
			<th>ID</th>
			<th>名称</th>
			<th>开始时间</th>
			<th>结束时间</th>
			<th>广告位置</th>
			<th>广告预览</th>
			<th>发布时间</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["name"]); ?></td>
				<td><?php echo ($v["startime"]); ?></td>
				<td><?php echo ($v["endtime"]); ?></td>
				<td><?php echo ($v["option"]); ?></td>
				<td style="width:50px;">
					<div style="height:45px; width:240px; margin-left:2px;"><img style="height:30px; width:240px; margin-left:2px;" 
					src='<?php if($v["mini"]): ?>__ROOT__/uploads/Adver/<?php echo ($v["mini"]); ?>
                        <?php else: ?>
                            __PUBLIC__/Images/nopic.jpg<?php endif; ?>'/></div>
				</td>
				<td><?php echo (date('y-m-d H:i', $v["addtime"])); ?></td>
				<td style="width:165px;">
					<div style="width:160px; margin:auto;">
					<a href="<?php echo U('delAdver', array('id' => $v['id']));?>" class='del'></a>
					<a href="<?php echo U('saveAdver', array('id' => $v['id']));?>" class='mod'></a>
					</div>
				</td>
			</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan='8' align='center' height='60'><?php echo ($show); ?></td>
		</tr>
	</table>
</body>
</html>