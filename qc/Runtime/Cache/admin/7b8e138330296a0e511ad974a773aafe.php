<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>祈福列表</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<body>
	<div class='status'>
		<span>祈福列表</span>
	</div>
	<table class="table">
		<tr>
			<th>ID</th>
			<th>祈福人</th>
			<th>内容</th>
			
			<th>发布时间</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($wish)): $i = 0; $__LIST__ = $wish;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v['username']); ?></td>
				<td><?php echo (replace_pic($v["content"])); ?></td>
				<td><?php echo (date('y-m-d H:i:s',$v["time"])); ?>
				</td>
				<td>
					<a href="<?php echo U('MsgManege/delete',array('id'=>$v['id']));?>" class='del'></a>
					
				</td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		<tr>
			<td colspan='7' align='center' height='60'><?php echo ($page); ?></td>
		</tr>
	</table>
</body>
</html>