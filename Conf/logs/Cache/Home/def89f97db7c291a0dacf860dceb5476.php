<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title><?php echo C('site_title');?></title>
    <meta content="<?php echo C('keyword');?>" name="Keywords">
    <meta content="<?php echo C('content');?>" name="Description">
    <script src="<?php echo RES;?>/js/html5.js?BPm"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/bootstrap_min.css?BPm" media="all" />
    <link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css?BPm" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/js/jQuery.js?BPm"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/carouFredSel.js?BPm"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/beta-index.js?BPm"></script>
	<link rel="shortcut icon" href="<?php echo RES;?>/images/favicon.ico" />
</head>
<body>
	<!--[if lte IE 8]>  <script language="javascript">$(function (){$.browser.msie&&$("#ie9-tips").show().find("#stopSuggestA").click(function(){$("#ie9-tips").hide()})})</script><![endif]-->
<div class="nav clearfix">
	<div class="nav-content">
		<h1 class="left"><a href="/"><?php echo C('site_name');?>·微信营销，如此简单！</a></h1>
		<div class="left city">
        <?php if($_SESSION[uid]==false): ?><h2><a href="<?php echo U('Home/Index/city');?>">
					全球代理查询<i class="tri4"></i>
				</a></h2>

			<?php else: ?>
				<h2>你好</h2>
				<a><span style="color:red"><?php echo (session('uname')); ?></span></a><?php endif; ?>
		</div>
		<div class="right line-li">
        
			 <ul>
        <li><a href="<?php echo U('Home/Index/index');?>"<?php if((ACTION_NAME) == "index"): ?>class="hover"<?php endif; ?>>首页</a></li>
        <li><a href="<?php echo U('Home/Index/common');?>" <?php if((ACTION_NAME) == "common"): ?>class="hover"<?php endif; ?> >经典案例</a></li>
	    <li class="nav_menu_li_1"><a style="width:70px; text-align:left;" class="_hover">产品中心<i></i></a>
					 <div class="sub-nav">
						 <a href="<?php echo U('Home/Index/price');?>">资费套餐</a>
						 <a href="<?php echo U('Other/Index/msg');?>">升级预约</a>
						 <a href="/">产品问答</a>
						 <a href="/">微拍</a>
						 <a href="/">小票机</a>
						 <a href="/">微WiFi</a>
					 </div>
	    </li>
        <li><a href="<?php echo U('Home/Index/proxy');?>" <?php if((ACTION_NAME) == "proxy"): ?>class="hover"<?php endif; ?> >渠道代理</a> </li>
		<li><a href="<?php echo U('Home/Index/fc');?>" <?php if((ACTION_NAME) == "fc"): ?>class="hover"<?php endif; ?> >功能介绍</a></li>		
        <li class="nav_menu_li_1"><a style="width:70px; text-align:left;" class="_hover" target="_black">帮助中心<i></i></a>
					 <div class="sub-nav">
						 <a href="<?php echo U('Home/Index/help');?>">使用指南</a>
						 <a href="http://www.gope.cn/" target="_black">技术支持</a>
						 <a href="http://wpa.qq.com/msgrd?v=3&uin=75943938&site=qq&menu=yes" target="_black">在线咨询</a>
					 </div>
        </li>
    </ul>

            <div class="account">
	       <?php if($_SESSION[uid]==false): ?><a href="<?php echo U('Home/Index/reg');?>" class="btn-reg btn0" >注册</a>
           <a href="javascript:;" class="btn-login btn0" onClick="loginBox.toggle(this, event);">登录</a>
						<div id="qrcode" class="qrcode">
					<div>
						<a id="switch" href="javascript:;"  class="switch"></a>
						<div id="qrcode_body" class="qrcode_body">
						</div>
					</div>
				</div>
	         <?php else: ?>
           <a href="<?php echo U('User/Index/index');?>" hidefocus="true" class="btn-reg btn0">管理</a>
		  <a href="javascript:void(0)" class="btn-login btn0" onClick="Javascript:window.open('<?php echo U('System/Admin/logout');?>','_blank')">退出</a>
						<div id="qrcode" class="qrcode">
					<div>
						<a id="switch" href="javascript:;"  class="switch"></a>
						<div id="qrcode_body" class="qrcode_body">
						</div>
					</div>
				</div><?php endif; ?>	  
		</div>
		</div>
	</div>
</div>
	<div id="loginBox">
		<div class="login-panel">
			<h3>登录</h3>
			<div class="login-mod">
				<div class="login-err-panel dn" id="err_area">
					<span class="icon-wrapper"><i class="icon24-login err" style="margin-top:-.2em;*margin-top:0;"></i></span>
					<span id="err_tips"></span>
				</div>
				<form action="<?php echo U('Users/checklogin');?>" method="post"  class="login-form" id="login-form">
					<div class="login-un">
						<span class="icon-wrapper"><i class="icon24-login un"></i></span>
						<input type="text" id="username" placeholder="<?php echo C('site_name');?>帐号">
					</div>
					<div class="login-pwd">
						<span class="icon-wrapper"><i class="icon24-login pwd"></i></span>
						<input type="password" id="password" name="password" placeholder="密码">
					</div>
				</form>
				<div class="login-help-panel">
					<a id="rememberPwd" class="login-remember-pwd" href="javascript:;">
						<input type="checkbox" id="rememberPwdIcon">记住帐号
					</a>
					<a class="login-forget-pwd" href="<?php echo U('Home/Index/regpwd');?>">忘记密码？</a>
                    <a class="login-forget-pwd" href="<?php echo U('Home/Index/reg');?>">新用户注册</a>
				</div>
				<div class="login-btn-panel">
					<a class="login-btn" title="点击登录" href="javascript:;" id="login_button" onClick="login();">登录</a>
				</div>
			</div>
		</div>
		<div class="login-cover" onClick="loginBox.toggle(this, event);"></div>
	</div>
<div id="ie9-tips" class="clearfix">
	<div id="tipsPanel">
		<div id="tipsDesc">系统检测到您所使用的浏览器版本较低，推荐使用<a href="http://www.firefox.com.cn/download/" target="_blank">Firefox</a>或<a href="http://www.google.cn/intl/zh-CN/chrome/browser/index.html" target="_blank">Chrome</a>浏览器打开，否则将无法体验完整产品功能。</div>
		<a id="stopSuggestA" href="javascript:;">×</a>
	</div>
</div>

<script>
var $do_submit = false;

// 绑定回车键
$('#loginBox').keydown(function(e){
	if(13 == event.keyCode){
		login();
	}
});

	function login()
	{
		if (true == $do_submit)
		{
			return false;
		}

		var $pre_submit = '登录', $done_submit = '登录中...';
		var $username = $('#username').val(), $password = $('#password').val(), $keepalive = $('#rememberPwdIcon').val();
		$('#login_button').text($done_submit);
		$do_submit = true;

		// check
		if ('' == $username || '' == $password)
		{
			$('#err_tips').text('您输入的帐号或密码错误，请重新输入！');
			$('#err_area').show();
			$('#login_button').text($pre_submit);
			$do_submit = false;
			return false;
		}

		var $login_data = {
			username:$username,
			password:$password,
			keepalive:$keepalive
		};
		$.post('<?php echo U('Users/checklogin');?>', $login_data, function(rs){
			if(rs.status == 1)
			{
				location.href = '<?php echo U('User/Index/index');?>';
			}
			else
			{
				$('#err_tips').text(rs.info);
				$('#err_area').show();
				$('#login_button').text($pre_submit);
			}
			$do_submit = false;
		}, 'json');
	}
</script>
<script>
	//alert($);
	$(function(){
		(function(){
			var slider = {
				flag:false,
				owner:$("#qrcode")[0],
				handleEvent: function(evt){
					var that = this;
					that.flag = ("mouseover" == evt.type);
					if(that.flag){
						params = {opacity:"1", top:"5px"};
						$("#qrcode_body").addClass("on");
						$("#switch").addClass("on");
						slider.owner.removeEventListener("mouseover", slider, false);
					}else{
						params = {opacity:"0", top:"-50px"};
						$("#switch").removeClass("on");
						slider.owner.removeEventListener("mouseleave", slider, false);
					}

					$("#qrcode_body").animate(params, 500, "swing", function(){
						if(that.flag){
							slider.owner.addEventListener("mouseleave", slider, false);
						}else{
							$("#qrcode_body").removeClass("on");
							slider.owner.addEventListener("mouseover", slider, false);
						}
					});
				}
			};
			slider.owner.addEventListener("mouseover", slider, false);
		})();

	});
</script>
<!-- banner -->

<script>
	if(top!=self)
		if(self!=top) top.location='<?php echo C('site_url');?>';
</script>
<div class="header clearfix">
	<div class="hd-c">
		<div class="banner">
			<ul>
									<li class="pic-intro" >
						<div class="text">
							<h4>
								已有<font>2014</font>商家入驻<?php echo C('site_name');?>，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Home/Index/reg');?>" title="入驻<?php echo C('site_name');?>"></a>
						</div>
													<div class="pic" onclick="location.href='<?php echo C('site_url');?>'" style="cursor:pointer;">
													<img src="<?php echo RES;?>/images/banner-ac.png?BPm" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>2014</font>商家入驻<?php echo C('site_name');?>，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Home/Index/reg');?>" title="入驻<?php echo C('site_name');?>"></a>
						</div>
													<div class="pic" onclick="location.href='<?php echo C('site_url');?>" style="cursor:pointer;">
													<img src="<?php echo RES;?>/images/banner-q.png?BPm" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>2014</font>商家入驻<?php echo C('site_name');?>，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Home/Index/reg');?>" title="入驻<?php echo C('site_name');?>"></a>
						</div>
													<div class="pic" onclick="location.href='<?php echo C('site_url');?>'" style="cursor:pointer;">
													<img src="<?php echo RES;?>/images/banner-d.png?BPm" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>2014</font>商家入驻<?php echo C('site_name');?>，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Home/Index/reg');?>" title="入驻<?php echo C('site_name');?>"></a>
						</div>
													<div class="pic" onclick="location.href='<?php echo C('site_url');?>'" style="cursor:pointer;">
													<img src="<?php echo RES;?>/images/banner-o.png?BPm" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>2014</font>商家入驻<?php echo C('site_name');?>，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Home/Index/reg');?>" title="入驻<?php echo C('site_name');?>"></a>
						</div>
													<div class="pic" onclick="location.href='<?php echo C('site_url');?>'" style="cursor:pointer;">
													<img src="<?php echo RES;?>/images/banner-p.png?BPm" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>2014</font>商家入驻<?php echo C('site_name');?>，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Home/Index/reg');?>" title="入驻<?php echo C('site_name');?>"></a>
						</div>
													<div class="pic" onclick="location.href='<?php echo C('site_url');?>'" style="cursor:pointer;">
													<img src="<?php echo RES;?>/images/banner-j.png?BPm" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>2014</font>商家入驻<?php echo C('site_name');?>，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Home/Index/reg');?> title="入驻<?php echo C('site_name');?>"></a>
						</div>
													<div class="pic" onclick="location.href='<?php echo C('site_url');?>'" style="cursor:pointer;">
													<img src="<?php echo RES;?>/images/banner-g.png?BPm" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>2014</font>商家入驻<?php echo C('site_name');?>，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Home/Index/reg');?>" title="入驻<?php echo C('site_name');?>"></a>
						</div>
													<div class="pic" onclick="location.href='<?php echo C('site_url');?>'" style="cursor:pointer;">
													<img src="<?php echo RES;?>/images/banner-f.png?BPm" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>2014</font>商家入驻<?php echo C('site_name');?>，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Home/Index/reg');?>" title="入驻<?php echo C('site_name');?>"></a>
						</div>
													<div class="pic">
													<img src="<?php echo RES;?>/images/banner-a.png?BPm" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>2014</font>商家入驻<?php echo C('site_name');?>，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Home/Index/reg');?>" title="入驻<?php echo C('site_name');?>"></a>
						</div>
													<div class="pic">
													<img src="<?php echo RES;?>/images/banner-b.png?BPm" class="png-24" alt="banner" />
						</div>
					</li>
									<li class="pic-intro" style="display: none;">
						<div class="text">
							<h4>
								已有<font>2014</font>商家入驻<?php echo C('site_name');?>，微信营销 如此简单
							</h4>
							<a id="start_btn" class="start" href="<?php echo U('Home/Index/reg');?>" title="入驻<?php echo C('site_name');?>"></a>
						</div>
													<div class="pic">
													<img src="<?php echo RES;?>/images/banner-c.png?BPm" class="png-24" alt="banner" />
						</div>
					</li>
							</ul>
			<div class="frame">
				<span class="changing-over">
																	<a href="#" class="now"></a>
																	<a href="#" ></a>
																	<a href="#" ></a>
																	<a href="#" ></a>
																	<a href="#" ></a>
																	<a href="#" ></a>
																	<a href="#" ></a>
																	<a href="#" ></a>
																	<a href="#" ></a>
																	<a href="#" ></a>
																	<a href="#" class="last"></a>
									</span>
			</div>
		</div>
	</div>
</div>

<!-- trade -->
<div class="notice_customers">
			<div id="notice-panel">
			<div style="width:600px; margin:0 auto; position:relative; z-index:20;">
				<h1><div class="notice_icon"></div>公告：</h1>
				<div class="notice">
					<label>
						<a href="javascript:;" onclick="javascript:$('#notice_mask').show(), $('#notice_message').show(); window.scrollTo(0,0);" title="">微喜帖升级为微邀请啦！</a>
						<span class="date"></span>
					</label>
				</div>
			</div>
		</div>
		<section class="customers">
		<h2>他们都在使用<?php echo C('site_name');?>Weimob</h2>
		<nav>
			<ul>
				<li><a href="#previous" class="arrow _previous"><b>上一个</b></a></li>
				<li><a href="#next" class="arrow _next"><b>下一个</b></a></li>
			</ul>
		</nav>
		<div class='clients-display'>
			<ul>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_15 first"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_12 first"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_5 first"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_3 first"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_9 first"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_6"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_7"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_8"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_1"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_10"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_11"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_4"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_13"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_14"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_2"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_16"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_17"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_18"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_19"></a></li>
				<li><a href="<?php echo U('Home/Index/common');?>" class="clients_20"></a></li>

			</ul>
		</div>
	</section>
	<script type="text/javascript">
		$(function(){

			/*rolling the logos*/

			function repeat(str, num) {
				return new Array( num + 1 ).join( str );
			}

			!function () {
				var $wrapper = $('.clients-display').css('overflow', 'hidden'),

					$slider = $wrapper.find('> ul'),
					$items = $slider.find('> li'),
					$single = $items.filter(':first'),

					singleWidth = $single.outerWidth(),
					visible = Math.ceil($wrapper.innerWidth() / singleWidth),
					currentPage = 1,
					pages = Math.ceil($items.length / visible);

				if (($items.length % visible) != 0) {
					$slider.append(repeat('<li class="empty" />', visible - ($items.length % visible)));
					$items = $slider.find('> li');
				}

				$items.filter(':first').before($items.slice(- visible).clone().addClass('cloned'));
				$items.filter(':last').after($items.slice(0, visible).clone().addClass('cloned'));
				$items = $slider.find('> li'); // reselect

				$wrapper.scrollLeft(singleWidth * visible);

				function gotoPage(page) {
					var dir = page < currentPage ? -1 : 1,
						n = Math.abs(currentPage - page),
						left = singleWidth * dir * visible * n;

					$wrapper.filter(':not(:animated)').animate({
						scrollLeft : '+=' + left
					}, 700, function () {
						if (page == 0) {
							$wrapper.scrollLeft(singleWidth * visible * pages);
							page = pages;
						} else if (page > pages) {
							$wrapper.scrollLeft(singleWidth * visible);
							// reset back to start position
							page = 1;
						}

						currentPage = page;
					});

					return false;
				}

				$('.arrow._previous').click(function () {
					return gotoPage(currentPage - 1);
				});

				$('.arrow._next').click(function () {
					return gotoPage(currentPage + 1);
				});

				$(this).bind('goto', function (event, page) {
					gotoPage(page);
				});
			}()});
		
	</script>
</div>

<!-- 视频播放 begin -->
<div class="content videopeak" style="left: 239.5px; top: 140px;">
	<ul>
		<li><div class="videopopup videopopup1" onclick="playVideo(0);"><div class="play-button"></div></div></li>
		<li><div class="videopopup videopopup2" onclick="playVideo(1);"><div class="play-button"></div></div></li>
		<li><div class="videopopup videopopup3" onclick="playVideo(2);"><div class="play-button"></div></div></li>
	</ul>
</div>
<div id="pop_video" class="videopeak-dialog" style="display:none;">
	<span class="videopeak-dialog-title-close" onclick="$('#pop_video').css('display','none'); $('#cover_video').css('display','none'); $('#flash_player_id').remove();"></span>
	<div class="videopeak-dialog-content" id="flash_player_box"></div>
</div>
<div id="cover_video" class="cover_video"></div>
<script>
	var video_map = [
		'uu=5201f0b16c&vu=17c9ae34a6&auto_play=1&gpcflag=1&width=860&height=480',
		'uu=5201f0b16c&vu=ee6c71103e&auto_play=1&gpcflag=1&width=860&height=480',
		'uu=5201f0b16c&vu=6cc5199595&auto_play=1&gpcflag=1&width=860&height=480'
	];

	/**
	 * 打开视频
	 */
	function playVideo($key)
	{
		$key = parseInt($key);
		$key = Math.max(0, Math.min($key, Math.max(0, (video_map.length - 1))));

		var $video_key = video_map[$key];

		var $html = '<embed id="flash_player_id" src="http://yuntv.letv.com/bcloud.swf" allowFullScreen="true" quality="high"  width="860" height="480" align="middle" allowScriptAccess="always" flashvars="'+$video_key+'" type="application/x-shockwave-flash"></embed>';
		$('#flash_player_box').html($html);
		$('#cover_video').css('display','block');
		$('#pop_video').css('display','block');
	}
</script>
<!-- 视频播放 end -->



<div id="cover_video" class="cover_video"></div>
<!-- trade -->
<div class="content clearfix">

	<div class="feature-content">
		<script>
			$(document).ready(function(){
				$(".feature-content dd").hover(
					function(){
						$(this).addClass("active")
					},
					function(){
						$(this).removeClass("active");
					}
				);
			});
		</script>

		<dl class="clearfix">
			<dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon website"></div>
					<h3>微官网</h3>
				</a>
				<p>5分钟轻松建站<br>打造酷炫微官网</p>
			</dd>
			<dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon member"></div>
					<h3>微信会员卡v2.0</h3>
				</a>
				<p>方便携带&nbsp;永不挂失<br>消费积分&nbsp;一卡配备</p>
			</dd>

			<dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon vshop"></div>
					<h3>微商城</h3>
				</a>
				<p>小微信也有大商城<br>电商轻松就能走入微信</p>
			</dd>
			<dd  class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon cate"></div>
					<h3>微餐饮</h3>
				</a>
				<p>扫一扫<br>微信也能够实时点餐</p>
			</dd>
			<dd>
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon wifi"></div>
					<h3><?php echo C('site_name');?>WiFi</h3>
				</a>
				<p>加粉神器<br>轻松让过客成为您的粉丝</p>
			</dd>

			
		</dl>
		<div class="line"></div>
		<dl class="clearfix">
			<dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon buy"></div>
					<h3>微团购</h3>
				</a>
				<p>拇指微团<br>将优惠装入客户口袋</p>
			</dd>

			<dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon weipai"></div>
					<h3>微拍</h3>
				</a>
				<p>时尚美照 微信增粉<br>在体验中感受企业魅力</p>
			</dd>
			<dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon card"></div>
					<h3>微邀请</h3>
				</a>
				<p>电子请帖&nbsp;微信来袭<br>提供用户特别服务</p>
			</dd>


			<dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon wpay"></div>
					<h3><?php echo C('site_name');?>支付</h3>
				</a>
				<p>整合多种在线支付<br>支付就这么简单</p>
			</dd>

			<dd>
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon kefu"></div>
					<h3>微客服</h3>
				</a>
				<p>沟通6亿用户<br>创造无限商机</p>
			</dd>

		

		</dl>
        <div class="line"></div>
         <dl class="clearfix">

			<dd  class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon car"></div>
					<h3>微汽车</h3>
				</a>
				<p>预约试驾或保养 车主关怀<br>360度看车应有尽有</p>
			</dd>
			 <dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					 <div class="fimg icon wallcame"></div>
					 <h3>微信墙</h3>
				 </a>
				 <p>活跃现场气氛<br>让粉丝涨起来</p>
			 </dd>
            
            <dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon hotel"></div>
					<h3>微酒店</h3>
				</a>
				<p>在线订房融入微信<br>酒店营销多一条有力途径</p>
			</dd>
            <dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon activities"></div>
					<h3>微活动</h3>
				</a>
				<p>吸引用户参与<br>增强用户沉淀</p>
			</dd>

			 <dd>
				<a href="<?php echo U('User/Index/index');?>">
					 <div class="fimg icon mstate"></div>
					 <h3>微房产</h3>
				 </a>
				 <p>全景看房 楼盘印象 预约看房<br>有效助力微信营销</p>
			 </dd>

		</dl>

        <div class="line"></div>
		<dl class="clearfix">
              <dd  class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon reserve"></div>
					<h3>微预约</h3>
				</a>
				<p>各种预约 一键即可<br>短信邮件会立即通知商户</p>
			</dd>
            
            <dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon albums"></div>
					<h3>微相册</h3>
				</a>
				<p>各行各业<br>照片展现轻松搞定</p>
			</dd>

			<dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon mtatistics"></div>
					<h3>数据魔方</h3>
				</a>
				<p>精准分析用户行为<br>轻松了解买家</p>
			</dd>

            	<dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon research"></div>
					<h3>微调研</h3>
				</a>
				<p>无需人力&nbsp;电子调研<br>为市场调研加一份有力数据</p>
			</dd>
			<dd>
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon community"></div>
					<h3>微社区</h3>
				</a>
				<p>建立微信社交平台<br> 社区虽小 见微知著</p>
			</dd>

		</dl>
		<div class="line"></div>
		<dl class="clearfix">
			
				<dd class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon medical"></div>
					<h3>微医疗</h3>
				</a>
				<p>在线挂号或咨询<br>了解病情 微信都可以</p>
			</dd>
            <dd class="vborder">
				<a>
					<div class="fimg icon life"></div>
					<h3>微生活</h3>
				</a>
				<p>微信公众号建立商圈<br>吃喝玩乐应有尽有</p>
			</dd>

			<dd  class="vborder">
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon message"></div>
					<h3>微留言</h3>
				</a>
				<p>意见？需求？疑问？<br>一键留言&nbsp;&nbsp;一键回复</p>
			</dd>
			<dd  class="vborder">
				<a>
					<div class="fimg icon weiqd"></div>
					<h3>微渠道</h3>
				</a>
				<p>二维码轻松一扫<br>有效统计粉丝来源</p>
			</dd>
			<dd >
				<a href="<?php echo U('User/Index/index');?>">
					<div class="fimg icon menu"></div>
					<h3>自定义菜单</h3>
				</a>
				<p>无需定制 完全自定义<br>无需触发 完全可视化</p>
			</dd>
		 
		</dl>
        <div class="line"></div>
	</div>
</div>
<!-- case -->
<div>
	<div class="list_carousel">
		<ul id="foo2">
										<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case1.jpg?BPm" alt="case1.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case2.jpg?BPm" alt="case2.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case3.jpg?BPm" alt="case3.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case4.jpg?BPm" alt="case4.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case5.jpg?BPm" alt="case5.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case6.jpg?BPm" alt="case6.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case7.jpg?BPm" alt="case7.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case8.jpg?BPm" alt="case8.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case9.jpg?BPm" alt="case9.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case10.jpg?BPm" alt="case10.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case11.jpg?BPm" alt="case11.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case12.jpg?BPm" alt="case12.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case13.jpg?BPm" alt="case13.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case14.jpg?BPm" alt="case14.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case15.jpg?BPm" alt="case15.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case16.jpg?BPm" alt="case16.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case17.jpg?BPm" alt="case17.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case18.jpg?BPm" alt="case18.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case19.jpg?BPm" alt="case19.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case20.jpg?BPm" alt="case20.jpg" />
					</a>
				</li>
							<li>
					<a href="javascript:void(0);">
						<img src="<?php echo RES;?>/images/case21.jpg?BPm" alt="case21.jpg" />
					</a>
				</li>
					</ul>
		<div class="clearfix"></div>
		<a id="prev2" class="prev" href="#"></a>
		<a id="next2" class="next" href="#"></a>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#foo2').carouFredSel({
					//auto: true,
					prev: '#prev2',
					next: '#next2',
					pagination: "#pager2",
					mousewheel: true,
					swipe: {
						onMouse: true,
						onTouch: true
					}
				});
			});
		</script>
	</div>
</div>


<!-- 意见反馈 -->
<div class="feedback" id="feedback">
	<p class="feedsize"><b>亲爱的用户</b><a class="close" href="javascript:;" onclick= "$('#feedback, #feedback_cover').toggleClass('on');">×</a></p>
	<p class="bbottom">欢迎您访问<?php echo C('site_name');?>官方网站！您对<?php echo C('site_name');?>有任何意见和建议，或在使用过程中遇到问题，请在本页面反馈。我们会实时关注您的反馈不断优化，您的建议将帮助我们改进，为您提供更好的服务！</p>
	<p class="feedsize"><b>请留下您的宝贵意见和建议！（请填写）</b></p>
	<form>
		<textarea  id="feedback-text" name="" id="feedback-text" placeholder="输入文本..."></textarea>
		<p class="feedsize"><b>您常用的电子邮箱是？（请填写）</b></p>
		<p style="color:#666; text-indent:1em;"><b class="blue">★</b>请尽量填写，以便我们尽快回复您！</p>
		<input type="text" placeholder="如：@163.com" id="feedback-input" />
       <p class="feedsize"><b>验证码</b></p>
        <input type="text" name="captcha" id="feedback-Captcha" maxlength="4" onclick="">
        <span name="feedback_captcha" id="feedback_captcha">
				<img title="看不清？点击更换" style="cursor: pointer;" src="/site/captcha?f=feedback&v=7670613" id="yanzhen" width="60" height="20" border="1">
	    </span>
	    <br />
		<input type="button"  class="feed-btn" value="" onclick="feedbackSubmit(); return false;" />
	</form>
</div>
<div id="feedback_cover" class="feedback_cover"></div>
<!--QQ咨询-->

<div class="footer">
  <div class="footer-content clearfix">
    <div class="foot-menu">
			<p>
				<a href="<?php echo C('site_url');?>" target="_blank"><?php echo C('site_name');?>首页</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Home/Index/reg');?>" target="_blank">申请入驻</a>&nbsp;|&nbsp;
				<a href="<?php echo U('Home/Index/proxy');?>" target="_blank">渠道代理</a>&nbsp;|&nbsp;
				<!--<a href="<?php echo U('Home/Index/about');?>" target="_blank">关于<?php echo C('site_name');?></a>&nbsp;|&nbsp;-->
				<a href="<?php echo U('Home/Index/agents');?>" target="_blank">授权认证</a>&nbsp;|&nbsp;
				<a href="agent.php" target="_blank">代理商登录</a>&nbsp;|&nbsp;
			</p>
			<p>客服QQ：<?php echo C('site_qq');?>&nbsp;&nbsp;&nbsp;技术QQ：<?php echo C('site_qq');?>&nbsp;&nbsp;&nbsp;邮箱：<?php echo C('site_email');?></p>
      <p>公司地址：<?php echo C('site_adress');?>&nbsp;&nbsp;&nbsp;咨询热线：<?php echo C('site_mp');?></p>
    </div>
		<div class="copyright">
			Copyright (c) 2011-<?php echo date('Y',time());?> <?php echo C('server_topdomain');?>. All Rights Reserved <?php echo C('copyright');?> <?php echo C('ipc');?> <?php echo C('counts');?>
 </div>
</div>
<!--<weixinerweima>-->
<div class="erwei" title="微信扫一扫">
	<span class="hudongzhushou">官方微信</span>
	<div class="erwei_big" style="display:none;">
		<p>扫一扫，关注<?php echo C('site_name');?>官方微信，体验<?php echo C('site_name');?>智能服务</p>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var erwei_time = null;
		$(".erwei").hover(function(){
			$(".erwei_big").show();
		}).mouseleave(function(){
				erwei_time = setTimeout(function(){
					$(".erwei_big").hide();
				},1000);
			});
		$(".erwei_big").mouseenter(function(){
			if(erwei_time){
				clearTimeout(erwei_time);
			}
		}).mouseleave(function(){
				erwei_time = setTimeout(function(){
					$(".erwei_big").hide();
				},1000);
			});
	});
</script>

<!--<weixinerweima>-->
<!-- Baidu Button BEGIN -->
<!-- 将此代码放在适当的位置，建议在body结束前 -->
<script id="bdaddtocite_shell"></script>
<script>
var bdShare_config_addtocite = {
	"type":"slide"
	,"pos":"left"
	,"color":"black"
	,"top":"200"
	,"uid":"6847210"
};
document.getElementById("bdaddtocite_shell").src="http://bdimg.share.baidu.com/static/js/addtocite_shell.js?t=" + Math.ceil(new Date()/3600000);

function zschref(){
	window.location.href="<?php echo C('site_url');?>";
}
</script>
<!-- Baidu Button END -->
<!---返回顶部------->
<div class="back2top" style="display:block"><a class="b_img" href="javascript:;"></a></div>
<script>
	function feedbackSubmit(){
		var $data = {
			feedback: $('#feedback-text').val(),
			email: $('#feedback-input').val(),
			url: self.location.href
		};
		$.post('/site/feedback', $data, function(rs){
			alert(rs.error);
			if (200 == rs.code)
			{
				$('#feedback, #feedback_cover').toggleClass('on');
			}
		}, 'json');
	}
</script>
<script type="text/javascript">
		$(document).ready(function(){
		var hash=window.location.hash || "#site";
		if(hash){
			var lis=$("#nav_lis>li"),
				divs=$("#nav_uls>div");
			lis.each(function(index, v) {
				if(hash == v.getAttribute("data-hash")){
					v.className="hover";
					//.var divs = $("#nav_uls>div");
					for(var i=0,ci; ci = divs[i]; i++){
						if(index == ci.getAttribute("data-index")){
							$(ci).addClass("show");
						}else{
							$(ci).removeClass("show");
						}
					}
			
				}
			});
		}


	$("#nav_lis").on("mouseover", function(e){
			$(this).find("li").removeClass("hover");
			e.target.className = "hover";
			var index = e.target.getAttribute("data-index");
			//
			var divs = $("#nav_uls>div");
			for(var i=0,ci; ci = divs[i]; i++){
				if(index == ci.getAttribute("data-index")){
					$(ci).addClass("show");
				}else{
					$(ci).removeClass("show");
				}
			}

		});


	});
</script>


<script>
	$(document).ready(function(){
		$("#yanzhen").click(function(){
			var img_src= '/site/captcha?f=feedback&v=';
			$(this).attr({"src":img_src + Math.random()*100000});
		});
	});
	function feedbackSubmit(){
		var $data = {
			feedback: $('#feedback-text').val(),
			email: $('#feedback-input').val(),
			captcha: $('#feedback-Captcha').val(),
			url: self.location.hrefy
		};
		$.post('/site/feedback', $data, function(rs){
			alert(rs.error);
			if (200 == rs.code)
			{
				$('#feedback, #feedback_cover').toggleClass('on');
			}
		}, 'json');
	}
</script>

<!--公告信息-->
	<div id="notice_mask"></div>
	<div id="notice_message" style="position: absolute;">
		<div class="title">公 告<a onclick="javascript:jQuery('#notice_mask').hide(),jQuery('#notice_message').hide();">×</a></div>
		<div class="content">
			<pre style="white-space:pre-wrap;">尊敬的<?php echo C('site_name');?>用户：
您好！
&nbsp; &nbsp; 微喜帖上线以来，创造出了一种新的婚姻喜帖发放模式，有很高的用户接受度，为了进一步扩展这一新模式的使用领域，应广大用户的强烈要求，<?php echo C('site_name');?>团队把微喜帖拓展成为全行业通用的微邀请。婚礼邀请，会议邀请…全部囊括，主要更新内容如下：<br />
1、	添加日程安排，人物介绍功能，丰富请帖传递的信息量；
2、	手机端各标题都可自定义；
3、	提供更多全新的模板及开场动画，适用于更多的行业，之后也会持续更新哦~
4、	添加短信提醒，商家及用户开启后，系统会提前1天向受邀请人发送提醒短信，避免错过时间；
5、	新增更简洁干净的回函界面；<br />
<strong><span style="color:#E53333;">注：微邀请适合黄金版及以上用户，原有行业版微婚庆套餐下线，大家注意咯！~</span></strong><br />
<br />
&nbsp; &nbsp; 当然不止这些，很多的细节也有进行修改及优化，您可搜索微信号“wojirain”关注，并发送“微邀请”立即体验试用吧！如有其他建议可以邮件至<?php echo C('site_email');?>，<?php echo C('site_name');?>团队会实时关注并跟踪优化哦！
<div style="text-align:right;">
	<span style="line-height:1.5;"><?php echo C('site_name');?>团队</span> 
</div>
<div style="text-align:right;">
	<span style="line-height:1.5;"><?php echo date("Y-m-d",time());?></span> 
</div></pre>
		</div>
	</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#notice_mask').click(function(){
			$('#notice_mask').hide();
			$('#notice_qrcode').hide();
			$('#notice_message').hide();
		});

		$(window).resize(function(){
			$('#notice_qrcode').css({
				position:'absolute',
				left: ($(window).width() - $('#notice_qrcode').outerWidth())/2,
				top: ($(window).height() - $('#notice_qrcode').outerHeight())/2
			});
			/*$('#notice_message').css({
				position:'absolute',
				left: ($(window).width() - $('#notice_message').outerWidth())/2,
				top: ($(window).height() - $('#notice_message').outerHeight())/2
			});*/
		});
	});
</script>
</body>
</html>