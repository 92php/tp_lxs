<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>定单列表</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<body>
	<div class='status'>
		<span>订单列表</span>
	</div>
	<table class="table">
		<tr>
			
			<th>ID</th>
			<th>分类</th>
			<th>订单号码</th>
			<th>订单名称</th>
			<th>订单备注</th>
			<th>联系人</th>
			<th>联系电话</th>
			<th>配送地址</th>
			<th>数量</th>
			<th>付款状态</th>
			<th>订单状态</th>
			<th>下单时间</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["type"]); ?></td>
				<td><?php echo ($v["booknum"]); ?></td>
				<td><?php echo ($v["name"]); ?></td>
				<td><?php echo ($v["note"]); ?></td>
				<td><?php echo ($v["contact"]); ?></td>
				<td><?php echo ($v["tel"]); ?></td>
				<td><?php echo ($v["action"]); ?></td>
				<td><?php echo ($v["number"]); ?></td>
				<td><?php if($v["buystatus"]): ?>已付款<?php else: ?>未付款<?php endif; ?></td>
				<td><?php if($v["bookstatus"]): ?>已处理<?php else: ?>未处理<?php endif; ?></td>
				<td><?php echo (date('y-m-d H:i', $v["addtime"])); ?></td>
				<td style="width:165px;">
					<div style="width:160px; margin:auto;">
					<a href="<?php echo U('delBook', array('id' => $v['id']));?>" class='del'></a>
					<a href="<?php echo U('saveBook', array('id' => $v['id']));?>" class='mod'></a>
					</div>
				</td>
			</tr><?php endforeach; endif; ?>
		<tr>
			<td colspan='13' align='center' height='60'><?php echo ($show); ?></td>
		</tr>
	</table>
</body>
</html>