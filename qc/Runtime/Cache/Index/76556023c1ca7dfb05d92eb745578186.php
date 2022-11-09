<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="__PUBLIC__/css/index.css" rel="stylesheet" type="text/css" />
<LINK rel=stylesheet type=text/css href="__PUBLIC__/images/calendar.css">
<link href="__PUBLIC__/css/hotel_show.css" rel="stylesheet" type="text/css"/>
<head>
<p id="back-to-top"><a href="#top"><span></span></a></p>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>五台山青春旅行社</title>
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
<script type="text/javascript">
			function ch(obj){
				obj.src='__URL__/yzm/'+Math.random();
			}
		</script>
<input name="btn" type="button" id="btn" onClick="toDesktop('http:\//www.wtsqc.com/','五台山青春旅行社')">
</head>
<body>

<!--登录框-->
<div class="login">
 	<span><img src="__PUBLIC__/images/images/word.jpg"></span>
	<div class="zhuche">
		<a href="<?php echo U(GROUP_NAME.'/Login/index');?>">马上登录</a>
	</div>
	<div class="editpwd">
		<a href="<?php echo U(GROUP_NAME.'/Index/register');?>" id="zhuche_lj">立即注册</a>	
	</div>
	<div class="huiyuan">
	<a href="#">会员中心</a>|<a href="#">订单管理</a>|<a href="#">联系我们</a>
	
	</div>
</div>
<!--LOGO框-->
<div class="logo">
		<div class="logo_pic"><img src="__PUBLIC__/images/images/logo.gif"/></div>
		<div class="piao"><span class="logo_pic"><img src="__PUBLIC__/images/images/logo_pw.jpg"/></span></div>
		<div class="tel"><img src="__PUBLIC__/images/images/tel.gif"/></div>
</div>

<!-- 主体开始 -->
<div class="login_ht">
	<div class="login_bjpic"></div>
	<div class="login_inpt">
		<div class="login_deng"><p>您还不是我们的会员？</p><a href="<?php echo U(GROUP_NAME.'/Index/register');?>">免费注册</a></div>
		<form action="<?php echo U(GROUP_NAME.'/Login/login');?>" method="post">
			<ul>
				<li><span>用户名：</span><input type='text' name="username" /></li>
				<li><span>密　码：</span><input type='password' name="password" /><span id="lei"><a href="">&nbsp;忘记密码？</a></span></li>
				<li><span>验证码：</span><input type='text' name="yzm" id="yzm"/><img style='margin-left:8px;padding-top:0px;' src="<?php echo U(GROUP_NAME.'/Login/yzm');?>"  onclick='ch(this)'/></li>
				<li><input type="checkbox" name="cookie" value="30" checked="checked"/><p id="cook">30天内自动登录</p></li>
				<li><input  type="submit" value="登　　录" id="sub"/></li>
				<li id="zhao">您还可以：<a href="">找回密码</a>或<a href="<?php echo U(GROUP_NAME.'/Index/register');?>">免费注册</a></li>
			</ul>
		</form>
	</div>
</div>
	<!--页脚 start-->
<div class="foot">
	<div class="foot_nav_s">
		<div id="footer" class="footer">
			   <p><a rel="nofollow" title="服务说明" href="">服务说明</a>&nbsp;|&nbsp;<a rel="nofollow" target="_blank" href="">营业执照</a>&nbsp;|&nbsp;<a rel="nofollow" target="_blank" href="http://pages.ctrip.com/public/Insurance/index.htm">保险代理</a>&nbsp;|&nbsp;<a target="_blank" href="">友情链接</a>&nbsp;|&nbsp;<a rel="nofollow" href="">Copyright&copy;</a> by-2013, <a href=""> 五台山青春旅行社</a>. All rights reserved.&nbsp;|&nbsp;<a rel="nofollow" target="_blank" href="http://www.miibeian.gov.cn/">ICP证：沪B2-20050130</a></p> 
			  <p>本站地图由北京图为先科技有限公司负责制作，测绘资质证书号：甲测字11002015，地图审图号：GS（2010）1049号</p> 
			  <p><a title="网站导航" href="__APP__">网站导航</a>&nbsp;|&nbsp;<a rel="nofollow" title="免费注册" href="">免费注册</a>&nbsp;|&nbsp;<a title="宾馆索引" href="">宾馆索引</a>&nbsp;|&nbsp;<a title="机票索引" href="http://flights.ctrip.com/booking/hot-city-flights-sitemap.html">机票索引</a>&nbsp;|&nbsp;<a title="旅游索引" href="">旅游索引</a>&nbsp;|&nbsp;<a rel="nofollow" title="关于我们" href="">关于我们</a>&nbsp;|&nbsp;<a rel="nofollow" href="" title="旅游度假资质">旅游度假资质</a>&nbsp;|&nbsp;<a rel="nofollow" title="诚聘英才" href="">诚聘英才</a>&nbsp;|&nbsp;<a rel="nofollow" title="联系我们" href="">联系我们</a></p>		
		</div>
	</div>	
</div>

<!--页脚 end-->
</body>
</html>