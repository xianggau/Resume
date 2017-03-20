<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>J</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/Public/admin/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/Public/admin/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="J" />
  <link rel="stylesheet" href="/Public/admin/assets/css/amazeui.min.css" />
  <link rel="stylesheet" href="/Public/admin/assets/css/admin.css">
  <link rel="stylesheet" href="/Public/admin/assets/css/app.css">
</head>

<body data-type="login">

  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text">
				J<span> Login</span> <i class="am-icon-skyatlas"></i>
				
			</div>
		</div>

		<div class="login-font">
			<i>Log In </i> or <span> Sign Up</span>
		</div>
		<div class="am-u-sm-10 login-am-center">
			<form class="am-form" id="login">
				<fieldset>
					<div class="am-form-group">
						<input type="text" class="" id="doc-ipt-email-1" placeholder="用户名" name="user">
					</div>
					<div class="am-form-group">
						<input type="password" class="" id="doc-ipt-pwd-1" placeholder="密码" name="pass">
					</div>
					<p><button type="button" class="am-btn am-btn-default" onclick="doLogin()">登录</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>
	<!-- 弹出框 -->
	<button
	  type="button"
	  class="am-btn am-btn-primary"
	  data-am-modal="{target: '#my-alert'}" style="display: none;" id="button">
	  Alert
	</button>
	<div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
	  <div class="am-modal-dialog">
	   
	    <div class="am-modal-bd">
	      账号或密码错误
	    </div>
	    <div class="am-modal-footer">
	      <span class="am-modal-btn">确定</span>
	    </div>
	  </div>
	</div>
  <script src="/Public/admin/assets/js/jquery.min.js"></script>
  <script src="/Public/admin/assets/js/amazeui.min.js"></script>
  <script src="/Public/admin/assets/js/app.js"></script>
   <script type="text/javascript">
        function doLogin(){
             $.ajax({
	     type:'post',             //请求方式GET
            url :'/index.php/Admin/Public/doLogin',           //ajax请求地址
            data:$(login).serialize(), //请求传递的参数
            //dataType:'json',        //预期服务器返回的数据类型
            async : true,           //是否异步
	            success: function(data){
	            	// alert(data);
		            if(data == "Y"){
		            	window.location.href="/index.php/Admin/Index/index";
		            }
		            if(data == "N"){
		             $("#button").click();
		            }
	            } , //ajax成功后的回调函数
           		error:function(){
           			
           		}
        	});
     	}
    </script>
</body>

</html>