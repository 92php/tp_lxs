<?php if (!defined('THINK_PATH')) exit();?><title><?php echo ($_COOKIE['user']); ?>-<?php echo ($list["0"]["type"]); ?>订单修改</title>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="__PUBLIC__/css/index.css" rel="stylesheet" type="text/css" />
<LINK rel=stylesheet type=text/css href="__PUBLIC__/images/calendar.css">
<link href="__PUBLIC__/css/hotel_show.css" rel="stylesheet" type="text/css"/>
<link href="__PUBLIC__/css/jingdian.css" rel="stylesheet" type="text/css"/>
<head>
<script type="text/javascript" src="__PUBLIC__/js/index.js"></script>
<!--弹出图层-->
<script type="text/javascript" src="__PUBLIC__/js/tck/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/tck/jquery.reveal.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/register.js"></script>
<!--弹出图层-->
<p id="back-to-top"><a href="#top"><span></span></a></p>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($system["0"]["WEBNAME"]); ?></title>
<script language="javascript" type="text/javascript" src="__PUBLIC__/My97DatePicker/WdatePicker.js"></script>
<script type="text/javascript" src='__PUBLIC__/js/jquery.js'></script>
<script type="text/javascript" src='__PUBLIC__/js/top.js'></script>
<!--城市选择-->
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/jquery.suggest.css">
 <script type="text/javascript" src="__PUBLIC__/js/jquery-1.4.2.min.js"></script>
 <script type="text/javascript" src="__PUBLIC__/js/j.dimensions.js"></script>
 <script type="text/javascript" src="__PUBLIC__/js/aircity.js"></script>
 <script type="text/javascript" src="__PUBLIC__/js/j.suggest.js"></script>
 <script type="text/javascript">
 $(function(){
 $("#arrcity").suggest(citys,{hot_list:commoncitys,dataContainer:'#arrcity_3word',onSelect:function(){$("#city2").click();}, attachObject:'#suggest'});
$("#city2").suggest(citys,{hot_list:commoncitys,attachObject:"#suggest2"});
});
</script>
<!--end-->
<script type="text/javascript">
	var t;
	$(function(){
		$("#ppt li").mouseover(function(){
			clearTimeout(t);
			var index=$(this).index();
			$(".pic a").hide();
			$(".pic a:eq("+index+")").show();
			$("#num_pic").val(index);
		});
		$("#ppt li").mouseout(function(){
			fun();
		})
		$(".pic a:gt(0)").hide();	
		t=setTimeout("fun()",5000);
	})
	function fun(){
		var num=$("#num_pic").val();
		$(".pic a").hide();
		$(".pic a:eq("+num+")").show();
		if(num!=4){
			$("#num_pic").val(Number(num)+1);
		}else{
			$("#num_pic").val(0);
		}
		t=setTimeout("fun()",2000);
	}
</script>
<input name="btn" type="button" id="btn" onClick="toDesktop('http:\//www.wtsqc.com/','五台山青春旅行社')">
</head>
<body>

<!--登录框-->
<div class="login">
 	<span><img src="__PUBLIC__/images/images/word.jpg"></span>
	<?php if($_COOKIE['user']): ?><div class="cookie">尊敬的 <a href="<?php echo U(GROUP_NAME.'/IndexUser/index');?>"><?php echo ($_COOKIE['user']); ?></a> 您好！欢迎您访问五台山青春旅行社！[<a href="<?php echo U(GROUP_NAME.'/Login/loginOut');?>">安全退出</a>]</div>
	<?php else: ?>
	
	<div class="zhuche">
		<a href="<?php echo U(GROUP_NAME.'/Login/index');?>">马上登录</a>
	</div>
	<div class="editpwd">
		<a href="<?php echo U(GROUP_NAME.'/Index/register');?>" id="zhuche_lj">立即注册</a>	
	</div><?php endif; ?>
	<div class="huiyuan">
	<a href="<?php echo U(GROUP_NAME.'/IndexUser/ziLiao');?>">会员中心</a>|<a href="<?php echo U(GROUP_NAME.'/IndexUser/index');?>">订单管理</a>|<a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $telme['id']));?>">联系我们</a>
	
	</div>
</div>
<!--LOGO框-->
<div class="logo">
		<div class="logo_pic"><a href="__APP__"><img src="__PUBLIC__/images/images/logo.gif"/></a></div>
		<div class="piao"><a href="__APP__"><img src="__PUBLIC__/images/images/logo_pw.jpg"/></a></div>
		<div class="tel"><img src="__PUBLIC__/images/images/tel.gif"/></div>
</div>
<!--导航条-->
<div class="nav">
	<div class="top_nav">
		<ul>
		  <li><a href="__APP__">网站首页</a></li>      
		  <li><a href="<?php echo U(GROUP_NAME.'/Hotel/index');?>">酒店预定</a></li>      
		  <li><a href="<?php echo U(GROUP_NAME.'/Circuit/index');?>">线路预定</a></li>
		  <li><a href="<?php echo U(GROUP_NAME.'/Carhire/index');?>">旅游租车</a></li>
		  <li><a href="<?php echo U(GROUP_NAME.'/Attractions/index');?>">山西景点</a></li>
		  <li><a href="<?php echo U(GROUP_NAME.'/Buddhist/index');?>">佛事活动</a></li>
		  <li><a href="<?php echo U(GROUP_NAME.'/Category/index');?>">商务会议</a></li>
		  <li><a href="<?php echo U(GROUP_NAME.'/QiYuan/index');?>">在线祈福</a></li>
		  <li><a href="<?php echo U(GROUP_NAME.'/Goods/index');?>">在线商城</a></li>
  		</ul>
	</div>
	<div class="bot_nav">
		<ul>
		  <li><a href="#">国内机票</a></li>      
		  <li><a href="#">国内酒店</a></li>      
		  <li><a href="#">旅游景点</a></li>
		  <li><a href="#">火 车 票</a></li>
		  <li><a href="#">汽 车 票</a></li>
		  <li><a href="#">便民服务</a></li>
		  <li><a href="#">彩票乐园</a></li>
		  <li><a href="#">演出票务</a></li>
		  <li><a href="#">线下代购</a></li>
  		</ul>
	</div>
</div>
<!-- 主体开始 -->
<div class="index_huiyuan"><p>当前位置：&nbsp;<a href="__GROUP__">首页</a>&nbsp; &raquo;&nbsp;<a href="#">会员中心</a></p></div>
<div class="huiyuan_main">
	<!--左侧 start-->
<div class="huiyuan_left">
		<div class="left_top">
			<div class="name_bj"></div>
			<div class="huiyuan_list">
				<li><a href="<?php echo U(GROUP_NAME.'/IndexUser/index');?>">全部订单</a></li>
				<li><a href="<?php echo U(GROUP_NAME.'/IndexUser/libBook', array('fenlei' => '1'));?>">酒店订单</a></li>
				<li><a href="<?php echo U(GROUP_NAME.'/IndexUser/libBook', array('fenlei' => '2'));?>">线路订单</a></li>
				<li><a href="<?php echo U(GROUP_NAME.'/IndexUser/libBook', array('fenlei' => '3'));?>">租车订单</a></li>
				<li><a href="<?php echo U(GROUP_NAME.'/IndexUser/libBook', array('fenlei' => '4'));?>">佛事订单</a></li>
				<li><a href="<?php echo U(GROUP_NAME.'/IndexUser/libBook', array('fenlei' => '5'));?>">会议订单</a></li>
				<li><a href="<?php echo U(GROUP_NAME.'/IndexUser/libBook', array('fenlei' => '6'));?>">商城订单</a></li>
			</div>
		</div>
		<div class="left_boot">
			<div class="geren_bj"></div>
			<div class="geren_list">
				<li><a href="<?php echo U(GROUP_NAME.'/IndexUser/ziLiao');?>">基本资料</a></li>
				<li><a href="<?php echo U(GROUP_NAME.'/IndexUser/editPwd');?>">密码修改</a></li>
				<li><a href="">邮寄地址</a></li>
				<li><a href="">我的积分</a></li>
			</div>
		</div>
	</div>
<!--左侧 end-->
	<div class="huiy_right">
		<div class="right_ziliao_bj"><span><?php echo ($list["0"]["type"]); ?>订单修改</span></div>
		<div class="righr_con_str">
			<div class="register_inpt" style="margin-top:70px;">
		<form action="<?php echo U(GROUP_NAME.'/IndexUser/runSaveBook');?>" method="post">
			<ul>
				<li style="width:390px; margin-bottom:15px;"><span>订单号码：</span><span><?php echo ($list["0"]["booknum"]); ?></span><span id="lei"><a href="" style="margin-left:55px;">&nbsp;订单号码（不可修改）</a></span></li>
				<li style="width:390px; margin-bottom:15px;"><span>订单名称：</span><span><?php echo ($list["0"]["name"]); ?></span><span id="lei"><a href="" style="margin-left:55px;">&nbsp;订单名称（不可修改）</a></span></li>
				<li style="width:390px; margin-bottom:15px;"><span>商品单价：</span><span>￥<?php echo ($list["0"]["price"]); ?>元</span><span id="lei"><a href="" style="margin-left:55px;">&nbsp;商品单价（不可修改）</a></span></li>
				
				<li><span>购买数量：</span><input type='text' name="number" value="<?php echo ($list["0"]["number"]); ?>" id="yzm"/></li>
				
				<li><span>联系姓名：</span><input type='text' name="contact" value="<?php echo ($list["0"]["contact"]); ?>" id="yzm"/></li>
				
				<li><span>联系电话：</span><input type='text' name="tel" value="<?php echo ($list["0"]["tel"]); ?>"/></li>
				<li><span>收货地址：</span><input type='text' name="action" value="<?php echo ($list["0"]["action"]); ?>"/><span id="lei"><a href="">&nbsp;地址必须正确，否则无法收货</a></span></li>
				<input type="hidden" name="booknum" value="<?php echo ($list["0"]["booknum"]); ?>">
				<input type="hidden" name="price" value="<?php echo ($list["0"]["price"]); ?>">
				<li><input  type="submit" value="确认修改" id="sed"/></li>
			</ul>
		</form>
	</div>
		
		</div>
	</div>
</div>

	<!--页脚 start-->
<div class="foot">
	<div class="foot_nav_s">
		<div id="footer" class="footer">
			   <p><a rel="nofollow" title="服务说明" href="">服务说明</a>&nbsp;|&nbsp;<a rel="nofollow" target="_blank" href="">营业执照</a>&nbsp;|&nbsp;<a rel="nofollow" target="_blank" href="http://pages.ctrip.com/public/Insurance/index.htm">保险代理</a>&nbsp;|&nbsp;<a target="_blank" href="">友情链接</a>&nbsp;|&nbsp;<a rel="nofollow" href="">Copyright&copy;</a> by-2013, <a href=""> <?php echo ($system["0"]["COPY"]); ?></a>. All rights reserved.&nbsp;|&nbsp;<a rel="nofollow" target="_blank" href="http://www.miibeian.gov.cn/">ICP证：<?php echo ($system["0"]["ICP"]); ?></a></p> 
			  <p>本站地图由北京图为先科技有限公司负责制作，测绘资质证书号：甲测字11002015，地图审图号：GS（2010）1049号</p> 
			  <p><a title="网站导航" href="__APP__">网站导航</a>&nbsp;|&nbsp;<a rel="nofollow" title="免费注册" href="">免费注册</a>&nbsp;|&nbsp;<a title="宾馆索引" href="">宾馆索引</a>&nbsp;|&nbsp;<a title="机票索引" href="http://flights.ctrip.com/booking/hot-city-flights-sitemap.html">机票索引</a>&nbsp;|&nbsp;<a title="旅游索引" href="">旅游索引</a>&nbsp;|&nbsp;<a rel="nofollow" title="关于我们" href="">关于我们</a>&nbsp;|&nbsp;<a rel="nofollow" href="" title="旅游度假资质">旅游度假资质</a>&nbsp;|&nbsp;<a rel="nofollow" title="诚聘英才" href="">诚聘英才</a>&nbsp;|&nbsp;<a rel="nofollow" title="联系我们" href="">联系我们</a></p>		
		</div>
	</div>	
</div>

<!--页脚 end-->
</body>
</html>