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
<!-- 主体开始 -->
<div class="min">
	<div class="yud">
		<div class="yud_left"> 
			<ul>
			  <li class="current"><a href="#">国内机票</a></li>      
			  <li class="yud_jiu"><a href="#">国内酒店</a></li>      
			  <li><a href="#">旅游景点</a></li>
			  <li><a href="#">火 车 票</a></li>
			  <li><a href="#">汽 车 票</a></li>
			  <li><a href="#">便民服务</a></li>
			  <li><a href="#">彩票乐园</a></li>
		  </ul>
		</div>
		<div class="yud_right">
			<div id="box">
			<form action="<?php echo U(GROUP_NAME.'/Hotel/inyud');?>" method="post">
			<ul>
				<li>入住城市：&nbsp;&nbsp;<input type="text" name="arrcity" id="arrcity" /></li>
				<div id='suggest' class="ac_results"></div>
				<li>入住时间：&nbsp;&nbsp;<input class="Wdate" type="text" onClick="WdatePicker()" name="startime"> </li>
			    <li>退房时间：&nbsp;&nbsp;<input class="Wdate" type="text" onClick="WdatePicker()" name="endtime"> </li>
				<li>共计天数：&nbsp;&nbsp;<input  class="dady"type="text" name="dady"/>天</li>
				<li>酒店名称：&nbsp;&nbsp;
				<select name="title" id="" style='width:135px;'>
						<option value="">请选择</option>
						<?php if(is_array($hotel)): $i = 0; $__LIST__ = $hotel;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</li>
				<li>价格范围：&nbsp;&nbsp;
				<select name="fanwei" id="" style='width:135px;'>
						<option value="">请选择</option>
						<option value="100以下">100以下</option>
						<option value="100-300">100-300</option>
						<option value="300-500">300-500</option>
						<option value="500-700">500-700</option>
						<option value="700-1000">700-1000</option>
						<option value="1100-1500">1100-1500</option>
						<option value="1600-1800">1600-1800</option>
						<option value="1900-2000">1900-2000</option>
						<option value="2000以上">2000以上</option>
					</select>
				</li>
				<input type="hidden" name='type' value='酒店订单'/>
				<input type="hidden" name='name' value="<?php echo ($_COOKIE['user']); ?>"/>
				<input type="hidden" name='phone' value="<?php echo ($_COOKIE['phone']); ?>"/>
				<input type="hidden" name='dizhi' value="<?php echo ($_COOKIE['dizhi']); ?>"/>
				<li><input type="submit" value="" class="sub_yud"/></li>
			</ul>
			</form>
			 </div>
		</div>
	</div>
	<div class="adv">
		<div class="pic">
		<?php if(is_array($adv)): $i = 0; $__LIST__ = $adv;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href=""><img 
					src='<?php if($v["max"]): ?>__ROOT__/uploads/Adver/<?php echo ($v["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/Images/nopic.jpg<?php endif; ?>'/></a><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
			<ul id="ppt">
			<?php for($i=1;$i<=$advcount;$i++){ echo "<li>$i</li>"; } ?>
		</ul>
	    <input type="hidden" value="0" id="num_pic"/>
	</div>
	<div class="yud_huiyi"><a href="<?php echo U(GROUP_NAME.'/Category/index');?>"><img src="__PUBLIC__/images/images/huiyi.gif"/></a></div>
	<div class="yud_zuche"><a href="<?php echo U(GROUP_NAME.'/Carhire/index');?>"><img src="__PUBLIC__/images/images/zuche.gif"/></a></div>
	<div class="yud_shop"><a href="<?php echo U(GROUP_NAME.'/Goods/index');?>"><img src="__PUBLIC__/images/images/shop.gif"/></a></div>
	<div class="yud_qifu"><a href="#"><img src="__PUBLIC__/images/images/qifu.gif"/></a></div>
	<div class="yud_piaowu"><img src="__PUBLIC__/images/images/piaowu.jpg"/></div>
</div>
<!--线路预定-->
<div class="luxian">
	<div class="luxian_word">线路预定</div>
	<div class="luxian_seach">
		<span>我想去</span>
		<form action="#" method="post">
			<input type="text" name="xianlu"/>
			<input type="submit" value="出发" id="xianlu_sub"/>
		</form>
	</div>
	<div class="luxian_list">
		<div class="list_top">
			<span>　<?php echo ($huad["0"]["region"]); ?>　　　　　　　　 <a href="">更多&gt;&gt;</a></span>
		</div>
		<div class="list_con_lx">
			<ul>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['0']['id']));?>"><?php if($huad['0']): echo ($huad["0"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['0']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['1']['id']));?>"><?php if($huad['1']): echo ($huad["1"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['1']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['2']['id']));?>"><?php if($huad['2']): echo ($huad["2"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['2']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['3']['id']));?>"><?php if($huad['3']): echo ($huad["3"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['3']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['4']['id']));?>"><?php if($huad['4']): echo ($huad["4"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['4']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['5']['id']));?>"><?php if($huad['5']): echo ($huad["5"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['5']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['6']['id']));?>"><?php if($huad['6']): echo ($huad["6"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['6']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['7']['id']));?>"><?php if($huad['7']): echo ($huad["7"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huad['7']['id']));?>">我要预定</a></span></li>
			</ul>
		</div>
	</div>
	<div class="luxian_list_1">
		<div class="list_top">
			<span>　<?php echo ($huaz["0"]["region"]); ?>　　　　　　　　<a href="">更多&gt;&gt;</a></span>
		</div>
		<div class="list_con_lx">
			<ul>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['0']['id']));?>"><?php if($huaz['0']): echo ($huaz["0"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['0']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['1']['id']));?>"><?php if($huaz['1']): echo ($huaz["1"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['1']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['2']['id']));?>"><?php if($huaz['2']): echo ($huaz["2"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['2']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['3']['id']));?>"><?php if($huaz['3']): echo ($huaz["3"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['3']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['4']['id']));?>"><?php if($huaz['4']): echo ($huaz["4"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['4']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['5']['id']));?>"><?php if($huaz['5']): echo ($huaz["5"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['5']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['6']['id']));?>"><?php if($huaz['6']): echo ($huaz["6"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['6']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['7']['id']));?>"><?php if($huaz['7']): echo ($huaz["7"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huaz['7']['id']));?>">我要预定</a></span></li>
				</ul>
		</div>
	</div>
	<div class="luxian_list_2">
		<div class="list_top">
			<span>　<?php echo ($huan["0"]["region"]); ?>　　　　　　　　<a href="">更多&gt;&gt;</a></span>
		</div>
		<div class="list_con_lx">
			<ul>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['0']['id']));?>"><?php if($huan['0']): echo ($huan["0"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['0']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['1']['id']));?>"><?php if($huan['1']): echo ($huan["1"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['1']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['2']['id']));?>"><?php if($huan['2']): echo ($huan["2"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['2']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['3']['id']));?>"><?php if($huan['3']): echo ($huan["3"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['3']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['4']['id']));?>"><?php if($huan['4']): echo ($huan["4"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['4']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['5']['id']));?>"><?php if($huan['5']): echo ($huan["5"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['5']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['6']['id']));?>"><?php if($huan['6']): echo ($huan["6"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['6']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['7']['id']));?>"><?php if($huan['7']): echo ($huan["7"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huan['7']['id']));?>">我要预定</a></span></li>
			</ul>
		</div>
	</div>
<!--------------------第二行----------------------------->
	<div class="luxian_list">
		<div class="list_top">
			<span>　<?php echo ($huab["0"]["region"]); ?>　　　　　　　　<a href="">更多&gt;&gt;</a></span>
		</div>
		<div class="list_con_lx">
			<ul>
				
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['0']['id']));?>"><?php if($huab['0']): echo ($huab["0"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['0']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['1']['id']));?>"><?php if($huab['1']): echo ($huab["1"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['1']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['2']['id']));?>"><?php if($huab['2']): echo ($huab["2"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['2']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['3']['id']));?>"><?php if($huab['3']): echo ($huab["3"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['3']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['4']['id']));?>"><?php if($huab['4']): echo ($huab["4"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['4']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['5']['id']));?>"><?php if($huab['5']): echo ($huab["5"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['5']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['6']['id']));?>"><?php if($huab['6']): echo ($huab["6"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['6']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['7']['id']));?>"><?php if($huab['7']): echo ($huab["7"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $huab['7']['id']));?>">我要预定</a></span></li>
			</ul>
		</div>
	</div>
	<div class="luxian_list_1">
		<div class="list_top">
			<span>　<?php echo ($dongb["0"]["region"]); ?>　　　　　　　　<a href="">更多&gt;&gt;</a></span>
		</div>
		<div class="list_con_lx">
			<ul>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['0']['id']));?>"><?php if($dongb['0']): echo ($dongb["0"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['0']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['1']['id']));?>"><?php if($dongb['1']): echo ($dongb["1"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['1']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['2']['id']));?>"><?php if($dongb['2']): echo ($dongb["2"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['2']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['3']['id']));?>"><?php if($dongb['3']): echo ($dongb["3"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['3']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['4']['id']));?>"><?php if($dongb['4']): echo ($dongb["4"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['4']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['5']['id']));?>"><?php if($dongb['5']): echo ($dongb["5"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['5']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['6']['id']));?>"><?php if($dongb['6']): echo ($dongb["6"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['6']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['7']['id']));?>"><?php if($dongb['7']): echo ($dongb["7"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $dongb['7']['id']));?>">我要预定</a></span></li>
			</ul>
		</div>
	</div>
	<div class="luxian_list_2">
		<div class="list_top">
			<span>　<?php echo ($ganga["0"]["region"]); ?>　　　　　　　　<a href="">更多&gt;&gt;</a></span>
		</div>
		<div class="list_con_lx">
			<ul>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['0']['id']));?>"><?php if($ganga['0']): echo ($ganga["0"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['0']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['1']['id']));?>"><?php if($ganga['1']): echo ($ganga["1"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['1']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['2']['id']));?>"><?php if($ganga['2']): echo ($ganga["2"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['2']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['3']['id']));?>"><?php if($ganga['3']): echo ($ganga["3"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['3']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['4']['id']));?>"><?php if($ganga['4']): echo ($ganga["4"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['4']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['5']['id']));?>"><?php if($ganga['5']): echo ($ganga["5"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['5']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['6']['id']));?>"><?php if($ganga['6']): echo ($ganga["6"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['6']['id']));?>">我要预定</a></span></li>
				<li><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['7']['id']));?>"><?php if($ganga['7']): echo ($ganga["7"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Circuit/cirShow', array('id' => $ganga['7']['id']));?>">我要预定</a></span></li>
			</ul>
		</div>
	</div>
</div>
<!-----------------在线租车------------------->
<div class="zuche">
	<div class="zuche_word">在线租车</div>
	<div class="zuche_seach">
		<span>我想要</span>
		<form action="#" method="post">
			<input type="text" name="zuche"/>
			<input type="submit" value="搜索" id="zuche_sub"/>
		</form>
	</div>
	<div class="zuche_yud">
		<div class="zhuche_yud_left">
		</div>
		<div class="zhuche_yud_right">
			<form action="<?php echo U(GROUP_NAME.'/Carhire/zuyud');?>" method="post">
				<ul>
				<li>取车时间：&nbsp;&nbsp;<input class="Wdate" type="text" onClick="WdatePicker()" name="startime"></li>
				<li>还车时间：&nbsp;&nbsp;<input class="Wdate" type="text" onClick="WdatePicker()" name="endtime"> </li>
			    <li>预约车型：&nbsp;&nbsp;
				<select name="title" id="" style='width:135px;'>
						<option value="">请选择</option>
						<?php if(is_array($car)): $i = 0; $__LIST__ = $car;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["title"]); ?>"><?php echo ($v["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
				</li>
				<li>租用天数：&nbsp;&nbsp;<input type="text" name="dady"/></li>
				<input type="hidden" name='type' value='租车订单'/>
				<input type="hidden" name='name' value="<?php echo ($_COOKIE['user']); ?>"/>
				<input type="hidden" name='phone' value="<?php echo ($_COOKIE['phone']); ?>"/>
				<input type="hidden" name='dizhi' value="<?php echo ($_COOKIE['dizhi']); ?>"/>
				<li><input type="submit" value="" class="sub_zuche"/></li>
			</ul>
			</form>
		</div>
	</div>
	<div class="banner">
		<img src='<?php if($banner["0"]["max"]): ?>__ROOT__/uploads/Adver/<?php echo ($banner["0"]["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/Images/nopic.jpg<?php endif; ?>'/>
	</div>
	<div class="prodct">
		<marquee scrollamount=2 scrolldelay=5  behavior=scroll Direction=left onmouseover=this.stop()  onmouseout=this.start()>
<div class="prodct_show">
			<div class="prodct_pic"><a href="<?php echo U(GROUP_NAME.'/Carhire/carShow', array('id' => $car['0']['id']));?>"><img src='<?php if($car["0"]["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($car["0"]["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a></div>
			<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Carhire/carShow', array('id' => $car['0']['id']));?>"><?php if($car["0"]["title"]): echo ($car["0"]["title"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span></div>
		</div>
		<div class="prodct_show1">
			<div class="prodct_pic"><a href="<?php echo U(GROUP_NAME.'/Carhire/carShow', array('id' => $car['1']['id']));?>"><img src='<?php if($car["1"]["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($car["1"]["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a></div>
			<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Carhire/carShow', array('id' => $car['1']['id']));?>"><?php if($car["1"]["title"]): echo ($car["1"]["title"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span></div>
		</div>
		<div class="prodct_show2">
			<div class="prodct_pic"><a href="<?php echo U(GROUP_NAME.'/Carhire/carShow', array('id' => $car['2']['id']));?>"><img src='<?php if($car["2"]["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($car["2"]["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a></div>
			<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Carhire/carShow', array('id' => $car['2']['id']));?>"><?php if($car["2"]["title"]): echo ($car["2"]["title"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span></div>
		</div>
		<div class="prodct_show3">
			<div class="prodct_pic"><a href="<?php echo U(GROUP_NAME.'/Carhire/carShow', array('id' => $car['3']['id']));?>"><img src='<?php if($car["3"]["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($car["3"]["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a></div>
			<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Carhire/carShow', array('id' => $car['3']['id']));?>"><?php if($car["3"]["title"]): echo ($car["3"]["title"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span></div>
		</div>
		<div class="prodct_show4">
			<div class="prodct_pic"><a href="<?php echo U(GROUP_NAME.'/Carhire/carShow', array('id' => $car['4']['id']));?>"><img src='<?php if($car["4"]["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($car["4"]["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a></div>
			<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Carhire/carShow', array('id' => $car['4']['id']));?>"><?php if($car["4"]["title"]): echo ($car["4"]["title"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span></div>
		</div>		</marquee>
	</div>
</div>
<!-----------------旅游景点------------------->
<div class="lvyou">
	<div class="zuche_word">旅游景点</div>
	<div class="lvyou_more">
		<span><a href="<?php echo U(GROUP_NAME.'/Attractions/index');?>"><img src="__PUBLIC__/images/images/more.jpg"/></a></span>
	</div>
	<div class="prodct">
		
		<div class="prodct_show">
			<div class="prodct_pic"><a href="<?php echo U(GROUP_NAME.'/Attractions/attrShow', array('id' => $Attractions['0']['id']));?>"><img src='<?php if($Attractions["0"]["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($Attractions["0"]["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a></div>
			<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Attractions/attrShow', array('id' => $Attractions['0']['id']));?>"><?php if($Attractions["0"]["title"]): echo ($Attractions["0"]["title"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span></div>
		</div>
		<div class="prodct_show1">
			<div class="prodct_pic"><a href="<?php echo U(GROUP_NAME.'/Attractions/attrShow', array('id' => $Attractions['1']['id']));?>"><img src='<?php if($Attractions["1"]["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($Attractions["1"]["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a></div>
			<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Attractions/attrShow', array('id' => $Attractions['1']['id']));?>"><?php if($Attractions["1"]["title"]): echo ($Attractions["1"]["title"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span></div>
		</div>
		<div class="prodct_show2">
			<div class="prodct_pic"><a href="<?php echo U(GROUP_NAME.'/Attractions/attrShow', array('id' => $Attractions['2']['id']));?>"><img src='<?php if($Attractions["2"]["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($Attractions["2"]["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a></div>
			<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Attractions/attrShow', array('id' => $Attractions['2']['id']));?>"><?php if($Attractions["2"]["title"]): echo ($Attractions["2"]["title"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span></div>
		</div>
		<div class="prodct_show3">
			<div class="prodct_pic"><a href="<?php echo U(GROUP_NAME.'/Attractions/attrShow', array('id' => $Attractions['3']['id']));?>"><img src='<?php if($Attractions["3"]["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($Attractions["3"]["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a></div>
			<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Attractions/attrShow', array('id' => $Attractions['3']['id']));?>"><?php if($Attractions["3"]["title"]): echo ($Attractions["3"]["title"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span></div>
		</div>
		<div class="prodct_show4">
			<div class="prodct_pic"><a href="<?php echo U(GROUP_NAME.'/Attractions/attrShow', array('id' => $Attractions['4']['id']));?>"><img src='<?php if($Attractions["4"]["max"]): ?>__ROOT__/uploads/Pic/<?php echo ($Attractions["4"]["max"]); ?>
                        <?php else: ?>
                            __PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a></div>
			<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Attractions/attrShow', array('id' => $Attractions['4']['id']));?>"><?php if($Attractions["4"]["title"]): echo ($Attractions["4"]["title"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span></div>
		</div>
		<div class="more_long"><a href="<?php echo U(GROUP_NAME.'/Attractions/index');?>"><img src="__PUBLIC__/images/images/moer_long.gif"/></a></div>
		<div class="jieji"><a href=""><img src="__PUBLIC__/images/images/jieji.gif"/></a></div>
	</div>
</div>
<!--========================商城==========================================-->
<div class="shop">
	<div class="shop_word">网上商城</div>
	<div class="shop_seach">
		<span>我想要</span>
		<form action="#" method="post">
			<input type="text" name="shop"/>
			<input type="submit" value="搜索" id="shop_sub"/>
		</form>
	</div>
	<div class="buy">
		<div class="buy_bj"></div>
		<div class="buy_jilu">	
			<ul>
			<marquee scrollamount=2 scrolldelay=5  behavior=scroll Direction=up onmouseover=this.stop()  onmouseout=this.start()>
				<li><a href=""><?php if($jilu['0']): echo ($jilu["0"]["title"]); else: ?>张先生购买了麻片<?php endif; ?></a></li>
				<li><a href=""><?php if($jilu['1']): echo ($jilu["1"]["title"]); else: ?>赵女生购买了保德碗脱<?php endif; ?></a></li>
				<li><a href=""><?php if($jilu['2']): echo ($jilu["2"]["title"]); else: ?>张先生购买了代县麻片<?php endif; ?></a></li>
				<li><a href=""><?php if($jilu['3']): echo ($jilu["3"]["title"]); else: ?>刘先生购买了代县麻片<?php endif; ?></a></li>
				<li><a href=""><?php if($jilu['4']): echo ($jilu["4"]["title"]); else: ?>柳先生购买了保德红枣<?php endif; ?></a></li>
				<li><a href=""><?php if($jilu['5']): echo ($jilu["5"]["title"]); else: ?>王先生购买了宁武围席<?php endif; ?></a></li>
				<li><a href=""><?php if($jilu['6']): echo ($jilu["6"]["title"]); else: ?>张先生购买了麻片<?php endif; ?></a></li>
				<li><a href=""><?php if($jilu['7']): echo ($jilu["7"]["title"]); else: ?>张先生购买了麻片<?php endif; ?></a></li>
			</marquee>
			</ul>
		</div>
	</div>
	<div class="shop_prod">
		<div class="shop_prod_show">
				<div class="shop_prod_pic"><a href="<?php echo U(GROUP_NAME.'/Goods/shopShow', array('id' => $shop['0']['id']));?>"><img src='<?php if($shop["0"]["picmax"]): ?>__ROOT__/uploads/Pic/<?php echo ($shop["0"]["picmax"]); ?>
							<?php else: ?>
								__PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a>
				</div>
				<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Goods/shopShow', array('id' => $shop['0']['id']));?>"><?php if($shop["0"]["name"]): echo ($shop["0"]["name"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span>
				</div>
				</div>
				<div class="shop_prod_show1">
					<div class="shop_prod_pic"><a href="<?php echo U(GROUP_NAME.'/Goods/shopShow', array('id' => $shop['1']['id']));?>"><img src='<?php if($shop["1"]["picmax"]): ?>__ROOT__/uploads/Pic/<?php echo ($shop["1"]["picmax"]); ?>
							<?php else: ?>
								__PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a>
				</div>
				<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Goods/shopShow', array('id' => $shop['1']['id']));?>"><?php if($shop["1"]["name"]): echo ($shop["1"]["name"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span>
				</div>
				</div>
				<div class="shop_prod_show2">
					<div class="shop_prod_pic"><a href="<?php echo U(GROUP_NAME.'/Goods/shopShow', array('id' => $shop['2']['id']));?>"><img src='<?php if($shop["2"]["picmax"]): ?>__ROOT__/uploads/Pic/<?php echo ($shop["2"]["picmax"]); ?>
							<?php else: ?>
								__PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a>
				</div>
				<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Goods/shopShow', array('id' => $shop['2']['id']));?>"><?php if($shop["2"]["name"]): echo ($shop["2"]["name"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span>
				</div>
				</div>
				<div class="shop_prod_show3">
					<div class="shop_prod_pic"><a href="<?php echo U(GROUP_NAME.'/Goods/shopShow', array('id' => $shop['3']['id']));?>"><img src='<?php if($shop["3"]["picmax"]): ?>__ROOT__/uploads/Pic/<?php echo ($shop["3"]["picmax"]); ?>
							<?php else: ?>
								__PUBLIC__/images/images/prodct.gif<?php endif; ?>'/></a>
				</div>
				<div class="prodct_word"><span><a href="<?php echo U(GROUP_NAME.'/Goods/shopShow', array('id' => $shop['3']['id']));?>"><?php if($shop["3"]["name"]): echo ($shop["3"]["name"]); ?>
                        <?php else: ?>
                            产品展示<?php endif; ?></a></span>
				</div>
				</div>
	</div>
	<div class="shop_more_long"><a href="<?php echo U(GROUP_NAME.'/Shop/index');?>"><img src="__PUBLIC__/images/images/moer_long.gif"/></a></div>
</div>
<!--------------------------------杂项-------------------------------------->
<div class="news">
			<div class="luxian_list">
				<div class="news_list_top">
					<span>　佛事活动　　　　　　　　　　<a href="">更多&gt;&gt;</a></span>
				</div>
				<div class="list_con_lx">
					<ul>
						<li><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['0']['id']));?>"><?php if($Buddhist['0']): echo ($Buddhist["0"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['0']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['1']['id']));?>"><?php if($Buddhist['1']): echo ($Buddhist["1"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['1']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['2']['id']));?>"><?php if($Buddhist['2']): echo ($Buddhist["2"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['2']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['3']['id']));?>"><?php if($Buddhist['3']): echo ($Buddhist["3"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['3']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['4']['id']));?>"><?php if($Buddhist['4']): echo ($Buddhist["4"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['4']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['5']['id']));?>"><?php if($Buddhist['5']): echo ($Buddhist["5"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['5']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['6']['id']));?>"><?php if($Buddhist['6']): echo ($Buddhist["6"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['6']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['7']['id']));?>"><?php if($Buddhist['7']): echo ($Buddhist["7"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/Buddhist/buddShow', array('id' => $Buddhist['7']['id']));?>">我要预定</a></span></li>
					</ul>
				</div>
			</div>
			<div class="luxian_list_1">
				<div class="news_list_top">
					<span>　导游服务　　　　　　　　　　<a href="">更多&gt;&gt;</a></span>
				</div>
				<div class="list_con_lx">
					<ul>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['0']['id']));?>"><?php if($news['0']): echo ($news["0"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['0']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['1']['id']));?>"><?php if($news['1']): echo ($news["1"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['1']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['2']['id']));?>"><?php if($news['2']): echo ($news["2"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['2']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['3']['id']));?>"><?php if($news['3']): echo ($news["3"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['3']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['4']['id']));?>"><?php if($news['4']): echo ($news["4"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['4']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['5']['id']));?>"><?php if($news['5']): echo ($news["5"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['5']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['6']['id']));?>"><?php if($news['6']): echo ($news["6"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['6']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['7']['id']));?>"><?php if($news['7']): echo ($news["7"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $news['7']['id']));?>">我要预定</a></span></li>
					</ul>
				</div>
			</div>
			<div class="luxian_list_2">
				<div class="news_list_top">
					<span>　佛教文化　　　　　　　　　　<a href="">更多&gt;&gt;</a></span>
				</div>
				<div class="list_con_lx">
					<ul>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['0']['id']));?>"><?php if($wenhua['0']): echo ($wenhua["0"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['0']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['1']['id']));?>"><?php if($wenhua['1']): echo ($wenhua["1"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['1']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['2']['id']));?>"><?php if($wenhua['2']): echo ($wenhua["2"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['2']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['3']['id']));?>"><?php if($wenhua['3']): echo ($wenhua["3"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['3']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['4']['id']));?>"><?php if($wenhua['4']): echo ($wenhua["4"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['4']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['5']['id']));?>"><?php if($wenhua['5']): echo ($wenhua["5"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['5']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['6']['id']));?>"><?php if($wenhua['6']): echo ($wenhua["6"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['6']['id']));?>">我要预定</a></span></li>
						<li><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['7']['id']));?>"><?php if($wenhua['7']): echo ($wenhua["7"]["title"]); else: ?>旅游路旅游路旅游旅游旅游路旅游路旅游路路线路<?php endif; ?></a><span><a href="<?php echo U(GROUP_NAME.'/News/index', array('id' => $wenhua['7']['id']));?>">我要预定</a></span></li>
					</ul>
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