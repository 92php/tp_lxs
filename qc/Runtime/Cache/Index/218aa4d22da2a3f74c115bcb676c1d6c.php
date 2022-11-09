<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<!--中部 start-->
<div class="hotel">
	<!--当前位置 start-->
	<div class="xianlu_option"><h6>当前位置：&nbsp;<a href="__GROUP__">首页</a>&nbsp; &raquo;&nbsp;<a href="#">线路预定</a></h6></div>
	<!--当前位置 end-->
	<!--条件搜索 start-->
	
	<!--条件搜索 end-->
	<!--内容 start-->
		<div class="xianlu_list">
		<!--第一行start-->
			<?php if($list): if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="list_line">
				<div class="list_line_pic"><img src='<?php if($v["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($v["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/images/images/pic.jpg<?php endif; ?>'/></div>
				<div class="list_line_word">
					<h2><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $v['id']));?>"><?php echo ($v["title"]); ?></a></h2>
					出发城市：<span><?php echo ($v["city"]); ?></span>交通方式：<span><?php echo ($v["transportation"]); ?></span>行程天数：<span><?php echo ($v["tourtime"]); ?>天</span>预定电话：<span><?php echo ($v["telme"]); ?></span>
					<p><?php echo ($v["about"]); ?></p>
					<a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $v['id']));?>" class="button">查看详情>></a>
				</div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<?php else: ?>
			暂无内容<?php endif; ?>
		<!--第一行end-->
		
		<!-----------分页start---------->
			<div class="list_page"><p><?php echo ($page); ?></p></div>
		<!-----------分页end---------->
		</div>
	<!--内容 end-->
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
</div>
<!--中部 end-->

</body>
</html>