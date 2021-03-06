<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>TAOSIR <?php echo L('ADMIN_CENTER');?></title>
		<meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge" />
		<meta name="renderer" content="webkit|ie-comp|ie-stand">
		<meta name="robots" content="noindex,nofollow">
			<link href="/wtcms-master/admin/themes/default/Public/assets/css/admin_login.css" rel="stylesheet" />
		<style>
			#login_btn_wraper{
				text-align: center;
			}
			#login_btn_wraper .tips_success{
				color:#fff;
			}
			#login_btn_wraper .tips_error{
				color:#ff0000;
			}
			#login_btn_wraper button:focus{outline:none;}
		</style>
		<script>
			if (window.parent !== window.self) {
					document.write = '';
					window.parent.location.href = window.self.location.href;
					setTimeout(function () {
							document.body.innerHTML = '';
					}, 0);
			}
		</script>
		
	</head>
<body>
	<video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
		<source src="/wtcms-master/admin/themes/default/Public/assets/images/time.webm" type="video/webm">
		<source src="/wtcms-master/admin/themes/default/Public/assets/images/time.mp4" type="video/mp4">
	</video>
	<div class="cover"></div>

	<div class="wrap">
		<h1>后台管理</h1>
		<form method="post" name="login" action="<?php echo U('public/dologin');?>" autoComplete="off" class="js-ajax-form">
			<div class="login">
				<ul>
					<li>
						<input class="input " id="js-admin-name" name="username" type="text" placeholder="<?php echo L('USERNAME_OR_EMAIL');?>" title="<?php echo L('USERNAME_OR_EMAIL');?>"  data-rule-required="true"  data-msg-required=""/>
					</li>
					<li>
						<input class="input " id="admin_pwd" type="password" name="password" placeholder="<?php echo L('PASSWORD');?>" title="<?php echo L('PASSWORD');?>" data-rule-required="true"  data-msg-required=""/>
					</li>
					<li >
						<input class="input" id="verify-code" type="text" name="verify" placeholder="<?php echo L('ENTER_VERIFY_CODE');?>"/>
						<?php echo sp_verifycode_img('length=4&font_size=16&width=120&height=34&use_noise=1&use_curve=0','style="cursor:pointer;border-radius:3px;float:right;" title="点击获取"');?>
					</li>
				</ul>
				<div id="login_btn_wraper">
					<button type="submit" name="submit" class="btn js-ajax-submit" data-loadingmsg="<?php echo L('LOADING');?>"><?php echo L('LOGIN');?></button>
				</div>
			</div>
		</form>
		<p style="color:#efefef;text-align:center;font-size:1.0em;">&copy; 2017 <a href="/">Storage</a>. Powered by <a href="http://www.taosir.top/" target="_blank">TAOSIR.</a><p>
	</div>

<script>
var GV = {
    ROOT: "/wtcms-master/",
    WEB_ROOT: "/wtcms-master/",
    JS_ROOT: "public/js/"
};
</script>
<script src="/wtcms-master/public/js/wind.js"></script>
<script src="/wtcms-master/public/js/jquery.js"></script>
<script type="text/javascript" src="/wtcms-master/public/js/common.js"></script>
<script>
;(function(){
	document.getElementById('js-admin-name').focus();
})();
</script>
</body>
</html>