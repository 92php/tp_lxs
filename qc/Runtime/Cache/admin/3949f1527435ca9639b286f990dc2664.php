<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>线路列表</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<body>
	<div class='status'>
		<span>线路列表</span>
	</div>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>佛事名称</th>
			<th>佛事简介</th>	
			<th>佛事配图</th>
			<th>发布时间</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["title"]); ?></td>
				<td style="width:300px;"><?php echo ($v["about"]); ?></td>
				<td style="width:180px;">
					<div style="height:135px; width:145px; margin-left:2px;"><img src='<?php if($v["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($v["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/Images/nopic.jpg<?php endif; ?>' style="height:135px; width:175px;"/></div>
				</td>
				<td><?php echo (date('y-m-d H:i', $v["addtime"])); ?></td>
				<td style="width:165px;">
					<div style="width:160px; margin:auto;">
					<a href="<?php echo U('delBuddhist', array('id' => $v['id']));?>" class='del'></a>
					<a href="<?php echo U('saveBuddhist', array('id' => $v['id']));?>" class='mod'></a>
					</div>
				</td>
			</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan='8' align='center' height='60'><?php echo ($page); ?></td>
		</tr>
	</table>
</body>
</html>