<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link href="__PUBLIC__/css/index.css" rel="stylesheet" type="text/css" />
<LINK rel=stylesheet type=text/css href="__PUBLIC__/images/calendar.css">
<link href="__PUBLIC__/css/hotel_show.css" rel="stylesheet" type="text/css"/>
<link href="__PUBLIC__/css/jingdian.css" rel="stylesheet" type="text/css"/>
<head>
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
	<a href="<?php echo U(GROUP_NAME.'/IndexUser/ziLiao');?>">会员中心</a>|<a href="<?php echo U(GROUP_NAME.'/IndexUser/index');?>">订单管理</a>|<a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $telme['0']['id']));?>">联系我们</a>
	
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
		  <li><a href="#">在线祈福</a></li>
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
<!--中部 start-->
<div class="hotel">
	<!--当前位置 start-->
	<div class="hoteloption"><h6>当前位置：&nbsp;<a href="__GROUP__">首页</a>&nbsp; &raquo;&nbsp;<a href="<?php echo U(GROUP_NAME.'/Hotel/index');?>">酒店预定</a></h6></div>
	<!--当前位置 end-->
	<!--内容 start-->
	<div class="hotelcontent">
	<div class="hotel_content">
		<div class="cont_top"><h6><a href=""><?php echo ($list["title"]); ?>预定</a></h6></div>
		<div class="cont_main">
			<h1><a href=""><?php echo ($list["title"]); ?></a></h1>
			<div class="cont_yud">
				<div class="locatin">
					<span>区&nbsp;&nbsp;域：</span>
					<a href=""><?php echo ($list["location"]); ?></a>
				</div>
				<div class="price">
					<span>价&nbsp;&nbsp;格：</span>
					<a href=""><?php echo ($list["price"]); ?>元</a>
				</div>
				<div class="grade">
					<span>档&nbsp;&nbsp;次：</span>
					<a href=""><?php echo ($list["grade"]); ?></a>
				</div>
				<div class="yudtel">
					<span>预定电话：</span>
					<a href=""><?php echo ($list["phone"]); ?></a>
				</div>
				<div class="yudimg"><a style="display:block;width:300px;margin:50px auto;text-align:center;font-size:18px;color:#5e5e5e;text-decoration:none; margin-top:-60px; margin-left:-60px;" href="javascript:void(0);" data-reveal-id="myModal"><img src="__PUBLIC__/images/images/me_yud.jpg" /></a></div>
			</div>
			<!--弹出框-->
			<div id="myModal" class="reveal-modal">
				<h2>预定表单</h2>
				<form action="<?php echo U(GROUP_NAME.'/Hotel/hotelyud');?>" method="post">
				<p>酒店名称：<input name="title" type="text" class="input" size="20" value="<?php echo ($list["title"]); ?>"></p>
				<p>入住时间：<input class="Wdate" type="text" onClick="WdatePicker()" name="startime" style="width:180px;height:30px;"> </p>
			    <p>退房时间：<input class="Wdate" type="text" onClick="WdatePicker()" name="endtime" style="width:180px;height:30px;"> </p>
				<p>　联系人：<input name="name" type="text" class="input" size="20"  value="<?php echo ($_COOKIE['user']); ?>"></p>
				<p>联系电话：<input name="phone" type="text" class="input" size="35" value="<?php echo ($_COOKIE['phone']); ?>"></p>
				<p>电子邮箱：<input name="email" type="text" class="input" size="35" value="<?php echo ($_COOKIE['dzyx']); ?>"></p>
				<p>预定天数：<input name="shu" type="text" class="input" size="35" value=""></p>
				<input type="hidden" name='type' value='酒店订单'/>
				<input type="hidden" name='price' value='<?php echo ($list["price"]); ?>'/>
				<input type="hidden" name='dizhi' value="<?php echo ($_COOKIE['dizhi']); ?>"/>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="sub" type="submit"  value="提交预定" id="tcyud"/></p></form>
				<a class="close-reveal-modal">&#215;</a>
			</div>
			<!--弹出框-->
			<div class="con">
					<div class="con_pic">
					<img src='<?php if($list["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($list["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/images/images/pic.jpg<?php endif; ?>'/>
					</div>
					<div class="con_word"><p style='width:640px; margin:auto;word-break:break-all'><?php echo ($list["content"]); ?></p></div>
				</div>
				<div class="conimg"><a style="display:block;width:300px;margin:50px auto;text-align:center;font-size:18px;color:#5e5e5e;text-decoration:none; margin-top:0px; margin-left:-60px;" href="javascript:void(0);" data-reveal-id="myModal"><img src="__PUBLIC__/images/images/me_yud.jpg" /></a></div>
		</div>
				<div class="page"><p style="width:340px; margin-left:0px;">上一篇：<a href="<?php echo U(GROUP_NAME.'/Hotel/hotelShow', array('id' => $prev['id']));?>"><?php if($prev): echo ($prev["title"]); else: ?>没有了<?php endif; ?></a></p><p style="width:340px; margin-right:0px;
				margin-top:-37px;">下一篇：<a href="<?php echo U(GROUP_NAME.'/Hotel/hotelShow', array('id' => $next['id']));?>"><?php if($next): echo ($next["title"]); else: ?>没有了<?php endif; ?></a></p></div>
	</div>
	<div class="righthotel">
		<div class="righthotel_title"><h2><a href="">推荐酒店</a></h2></div>
		<div class="righthotel_list">
			<ul>
				<?php if(is_array($tuijie)): $i = 0; $__LIST__ = array_slice($tuijie,1,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U(GROUP_NAME.'/Hotel/hotelShow', array('id' => $v['id']));?>"><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
	<div class="callme">
		<div class="righthotel_title"><h2><a href="">联系我们</a></h2></div>
		<div style="width:250px; height:260px;"><?php echo ($telme["0"]["content"]); ?></div>
	</div>

</div>
	</div>
	<!--内容 end-->
	
<!--中部 end-->
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