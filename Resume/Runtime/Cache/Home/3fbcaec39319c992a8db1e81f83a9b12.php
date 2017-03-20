<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>J</title>

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="image/png" href="/Public/assets/i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="/Public/assets/i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="/Public/assets/i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="/Public/assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
  <!--
  <link rel="canonical" href="http://www.example.com/">
  -->

  <link rel="stylesheet" href="/Public/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="/Public/assets/css/app.css">
  <style type="text/css">
      .info{
        font-size: 12px;
        /*margin-left: 20px;*/
      }
  </style>
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a
  href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->
<header class="am-topbar am-topbar-inverse am-topbar-fixed-top"style="background-color: #333;">
  <h1 class="am-topbar-brand " style="text-align: center;">
    <a href="/index.php/Home/Index/index"><span class="am-icon-home am-icon-sd"></span></a>
  </h1>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}" style="background-color: #777; border-color: #666"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars " ></span></button>

  <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li class="am-active"><a href="#">基本信息</a></li>
      <li><a href="#">项目经验</a></li>
    </ul>
  </div>
</header>
<div class="am-container">
<article data-am-widget="paragraph"class="am-paragraph am-paragraph-default"data-am-paragraph="{ tableScrollable: true, pureview: true }">
            
        <div class="am-article-hd">
            <p>个人项目：个人博客</p>
        </div>
        <div class="am-article-bd">
            <p class="am-article-lead">项目描述：
               使用ThinkPHP开发的，分为文章、分类、标签、评论的管理。页面是Bootstrap编写的响应式布局。文章可以置顶、加精、推荐。评论使用jQuery Ajax。
            </p>

      <img src="/Public/img/2.png">
      <img src="/Public/img/1.png">
      <p class="am-article-lead">
		项目总结：<br>
		通过这个博客的开发熟悉了MVC开发模式，同时让我更熟练的运用Bootstrap、Ajax、jQuery等技术。
      </p>
  </article>
    

</div>
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
      id="" >
      <ul class="am-navbar-nav am-cf am-avg-sm-4" style="background-color: #333">
          <li >
            <a href="tel:18835154881" class="">
                  <span class="am-icon-phone"></span>
                <span class="am-navbar-label">呼叫</span>
            </a>
          </li>
          <li >
            <a href="https://github.com/allmobilize/amazeui" class="">
                  <span class="am-icon-github"></span>
                <span class="am-navbar-label">GitHub</span>
            </a>
          </li>
      </ul>
  </div> 

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Public/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/Public/assets/js/amazeui.min.js"></script>

</body>
</html>