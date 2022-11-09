<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>五台山青春旅行社 后台管理中心</title>
	<link rel="stylesheet" href="__PUBLIC__/Css/index.css" />
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.8.2.min.js'></script>
	<script type="text/javascript" src='__PUBLIC__/Js/index.js'></script>
	<base target="iframe" />
</head>
<body>
	<div id="top">
		<a href='__ROOT__' target='_self'><div class='logo'></div></a>
		<div class='t_title'>青春旅行社后台管理中心</div>
		<div class='menu'>
			<ul>
				<li class='first first_cur'>
					<a href="<?php echo U('copy');?>"><span>首&nbsp;页</span></a>
				</li>
				<li>
					<a href="<?php echo U('Book/index');?>"><span>订单管理</span></a>
				</li>
				<li>
					<a href="<?php echo U('Goods/index');?>"><span>商城管理</span></a>
				</li>
				<li>
					<a href="<?php echo U('QiYuan/index');?>"><span>祈福管理</span></a>
				</li>
				<li>
					<a href="<?php echo U('Adver/index');?>"><span>广告管理</span></a>
				</li>
				<li class='last'>
					<a href="<?php echo U('System/index');?>"><span>系统设置</span><div></div></a>
				</li>
			</ul>
			<div id='user'>
				<span class='user_state'>当前管理员：[<span><?php echo (session('username')); ?></span>]</span>
				<a href="<?php echo U('loginOut');?>" target='_self' id='login_out'></a>
			</div>
		</div>
	</div>
	<div id='left'>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">信息管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U("News/index");?>'>信息列表</a></li>
			<li><a href='<?php echo U("News/addNews");?>'>添加信息</a></li>
			<li><a href='<?php echo U("News/seachNews");?>'>信息检索</a></li>
		</ul>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">用户管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U("IndexUser/index");?>'>前台用户</a></li>
			<li><a href='<?php echo U("IndexUser/sechIndexUser");?>'>前台用户检索</a></li>
			<li><a href='<?php echo U("User/index");?>'>后台管理员</a></li>
			<?php if(!$_SESSION["username"]): ?><li><a href='<?php echo U("User/addAdmin");?>'>添加管理员</a></li><?php endif; ?>
		</ul>

		<div class='nav'>
			<div class="nav_u"><span class="pos down">酒店管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U("Hotel/index");?>'>酒店列表</a></li>
			<li><a href='<?php echo U("Hotel/addHotel");?>'>新增酒店</a></li>
			<li><a href='<?php echo U("Hotel/sechHotel");?>'>酒店检索</a></li>
		</ul>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">线路管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U("Circuit/index");?>'>线路列表</a></li>
			<li><a href='<?php echo U("Circuit/addCircuit");?>'>新增线路</a></li>
			<li><a href='<?php echo U("Circuit/sechCircuit");?>'>线路检索</a></li>
		</ul>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">租车管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U("Carhire/index");?>'>租车列表</a></li>
			<li><a href='<?php echo U("Carhire/addCarhire");?>'>新增租车</a></li>
			<li><a href='<?php echo U("Carhire/sechCarhire");?>'>租车检索</a></li>
		</ul>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">预定管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U("Book/index");?>'>预定列表</a></li>
			<li><a href='<?php echo U("Book/index");?>'>修改列表</a></li>
		</ul>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">佛事管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U("Buddhist/index");?>'>佛事列表</a></li>
			<li><a href='<?php echo U("Buddhist/addBuddhist");?>'>新增佛事</a></li>
			<li><a href='<?php echo U("Buddhist/sechBuddhist");?>'>佛事检索</a></li>
		</ul>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">景点管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U("Attractions/index");?>'>景点列表</a></li>
			<li><a href='<?php echo U("Attractions/addAttractions");?>'>新增景点</a></li>
			<li><a href='<?php echo U("Attractions/sechAttractions");?>'>景点检索</a></li>
		</ul>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">会议管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U("Category/index");?>'>会议列表</a></li>
			<li><a href='<?php echo U("Category/addCategory");?>'>新增会议</a></li>
			<li><a href='<?php echo U("Category/sechCategory");?>'>会议检索</a></li>
		</ul>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">商城管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U("Goods/index");?>'>商品列表</a></li>
			<li><a href='<?php echo U("Goods/addGoods");?>'>添加商品</a></li>
			<li><a href='<?php echo U("Goods/goodsType");?>'>商品分类</a></li>
		</ul>
		<div class='nav'>
			<div class="nav_u"><span class="pos down">祈福管理</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U("QiYuan/index");?>'>祈福列表</a></li>
			
		</ul>
		
		<div class='nav'>
			<div class="nav_u"><span class="pos down">系统设置</span></div>
		</div>
		<ul class='option'>
			<li><a href='<?php echo U("System/filter");?>'>关键字过滤</a></li>
			<li><a href='<?php echo U("System/index");?>'>网站设置</a></li>
			<li><a href="<?php echo U('Adver/index');?>">广告管理</a></li>
			<li><a href='<?php echo U("User/editPwd");?>'>修改密码</a></li>
		</ul>
	</div>
	<div id="right">
		<iframe src="<?php echo U('copy');?>" frameborder="0" name='iframe'></iframe>
	</div>
</body>
</html>