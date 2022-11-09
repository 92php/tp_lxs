<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>前台用户列表</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/common.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/common.js'></script>
</head>
<body>
	<div class='status'>
		<span>前台用户检索</span>
	</div>
	<div style='width:600px;text-align:center;margin : 20px auto;'>
		<form action='<?php echo U("IndexUser/sechIndexUser");?>' method='get'>
			检索方式：
			<select name="type">
				<option value="1">用户账号</option>
				<option value="0">真实姓名</option>
			</select>
			<input type="text" name='sech'/>
			<input type="submit" value='' class='see'/>
		</form>
	</div>
	<table class="table">
		<?php if(isset($indexuser) && !$indexuser): ?><tr>
				<td align='center'><img src='__PUBLIC__/Images/noseach.jpg'/>没有检索到相关用户</td>
			</tr>
		<?php else: ?>
			<tr>
			<th>ID</th>
			<th>用户账号</th>
			<th>真实姓名</th>
			<th>性别</th>
			<th>注册时间</th>
			<th>最后登录时间</th>
			<th>最后登录IP</th>
			<th>账号状态</th>
			<th>操作</th>
		</tr>
			<?php if(is_array($indexuser)): foreach($indexuser as $key=>$v): ?><tr>
				<td width='50' align='center'><?php echo ($v["id"]); ?></td>
				<td width='120' align='center'><?php echo ($v["email"]); ?></td>
				<td width='120' align='center'><?php echo ($v["truename"]); ?></td>
				<td width='50' align='center'><?php if($v["sex"]): ?>男<?php else: ?>女<?php endif; ?></td>
				<td align='center'><?php echo (date('y-m-d H:i', $v["registime"])); ?></td>
				<td align='center'><?php echo (date('y-m-d H:i', $v["logintime"])); ?></td>
				<td align='center'><?php echo ($v["loginip"]); ?></td>
				<td width='60' align='center'>
					<?php if($v["lock"]): ?>锁定<?php else: ?>正常<?php endif; ?>
				</td>
				
					<td width='240'>
						
							<?php if($v["lock"]): ?><a href="<?php echo U('lockIndex', array('id' => $v['id'], 'lock' => 0));?>" class='add lock'>解除锁定</a>
							<?php else: ?>
								<a href="<?php echo U('lockIndex', array('id' => $v['id'], 'lock' => 1));?>" class='add lock'>锁定用户</a><?php endif; ?>
							<a href='<?php echo U("delIndex", array("id" => $v["id"]));?>' class='add lock'>删除用户</a>
						
					</td>
				
			</tr><?php endforeach; endif; endif; ?>
	</table>
</body>
</html