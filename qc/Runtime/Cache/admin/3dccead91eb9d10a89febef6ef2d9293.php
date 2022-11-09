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
		<span>线路检索</span>
	</div>
	<div style='width:600px;text-align:center;margin : 20px auto;'>
		<form action="__SELF__" method='get'>
			检索方式：
			<select name="type">
				<option value="1">线路区域</option>
				<option value="0">线路名称</option>
			</select>
			<input type="text" name='sech'/>
			<input type="submit" value='' class='see'/>
		</form>
	</div>
	<table class="table">
		<?php if(isset($circuit) && !$circuit): ?><tr>
				<td align='center'><img src='__PUBLIC__/Images/noseach.jpg'/>没有检索到相关线路</td>
			</tr>
		<?php else: ?>
			<tr>
			<th>ID</th>
			<th>线路区域</th>
			<th>线路名称</th>
			<th>交通方式</th>
			<th>行程天数</th>
			<th>线路配图</th>
			<th>发布时间</th>
			<th>操作</th>
		</tr>
			<?php if(is_array($circuit)): foreach($circuit as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["region"]); ?></td>
				<td><?php echo ($v["title"]); ?></td>
				<td><?php echo ($v["transportation"]); ?></td>
				<td><?php echo ($v["tourtime"]); ?>/天
				</td>
				<td style="width:180px;">
					<div style="height:85px; width:85px; margin-left:2px;"><img src='<?php if($v['medium']): ?>__ROOT__/uploads/Pic/<?php echo ($v["medium"]); ?>
                        <?php else: ?>
                            __PUBLIC__/Images/nopic.jpg<?php endif; ?>'style="height:85px; width:120px;"/></div>
				</td>
				<td><?php echo (date('y-m-d H:i', $v["addtime"])); ?></td>
				<td style="width:165px;">
					<div style="width:160px; margin:auto;">
					<a href="<?php echo U('delCircuit', array('id' => $v['id']));?>" class='del'></a>
					<a href="<?php echo U('saveCircuit', array('id' => $v['id']));?>" class='mod'></a>
					</div>
				</td>
			</tr><?php endforeach; endif; endif; ?>
	</table>
</body>
</html