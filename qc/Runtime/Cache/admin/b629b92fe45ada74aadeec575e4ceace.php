<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>酒店列表</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<body>
	<div class='status'>
		<span>酒店检索</span>
	</div>
	<div style='width:600px;text-align:center;margin : 20px auto;'>
		<form action="__SELF__" method='get'>
			检索方式：
			<select name="type">
				<option value="1">酒店星级</option>
				<option value="0">酒店名称</option>
			</select>
			<input type="text" name='sech'/>
			<input type="submit" value='' class='see'/>
		</form>
	</div>
	<table class="table">
		<?php if(isset($hotel) && !$hotel): ?><tr>
				<td align='center'><img src='__PUBLIC__/Images/noseach.jpg'/>没有检索到相关酒店</td>
			</tr>
		<?php else: ?>
			<tr>
			<th>ID</th>
			<th>酒店档次</th>
			<th>酒店名称</th>
			<th>酒店价格</th>
			<th>酒店配图</th>
			<th>发布时间</th>
			<th>操作</th>
		</tr>
			<?php if(is_array($hotel)): foreach($hotel as $key=>$v): ?><tr>
				<td><?php echo ($v["id"]); ?></td>
				<td><?php echo ($v["grade"]); ?></td>
				<td><?php echo ($v["title"]); ?></td>
				<td><?php echo ($v["price"]); ?>/元
				</td>
				<td style="width:180px;">
					<div style="height:135px; width:145px; margin-left:2px;"><img src='<?php if($v.medium): ?>__ROOT__/uploads/Pic/<?php echo ($v["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/Images/nopic.jpg<?php endif; ?>'/></div>
				</td>
				<td><?php echo (date('y-m-d H:i', $v["addtime"])); ?></td>
				<td style="width:165px;">
					<div style="width:160px; margin:auto;">
					<a href="<?php echo U('delHotel', array('id' => $v['id']));?>" class='del'></a>
					<a href="<?php echo U('saveHotel', array('id' => $v['id']));?>" class='mod'></a>
					</div>
				</td>
			</tr><?php endforeach; endif; endif; ?>
	</table>
</body>
</html