<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>王杰的简历</title>

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
    <a href="#"><span class="am-icon-home am-icon-sd"></span></a>
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
<div class="am-panel am-panel-default">
    <div class="am-u-sm-3 am-fl">
        <img class="am-circle am-center" src="/Public/img/img.png" width="100" height="100"/ >
    </div>
    <div class="am-u-sm-8 am-fr">
        <!-- <h3></h3> -->
        <ul class="am-list info am-margin-top info am-margin-left " >
          <li><span></span>  <?php echo ($info["name"]); ?></li>
          <li><span class="am-icon-graduation-cap"></span><?php echo ($info["birthday"]); ?></li>
          <li><span class="am-icon-phone"></span><?php echo ($info["phone"]); ?></li>
          <li><span class="am-icon-inbox"></span><?php echo ($info["email"]); ?></li>
        </ul>
    </div>
      <div data-am-widget="tabs"
       class="am-tabs am-tabs-default"
        >
      <ul class="am-tabs-nav am-cf" id="select">
          <li class="am-active"><a href="[data-tab-panel-0]" >个人资料</a></li>
          <li class=""><a href="[data-tab-panel-1]">专业技能</a></li>
          <li class=""><a href="[data-tab-panel-2]">项目简介</a></li>
      </ul>
      <div class="am-tabs-bd">
          <div data-tab-panel-0 class="am-tab-panel am-active">
            <ul class="am-list am-list-static am-list-border am-list-striped">
              <li>毕业学校：<?php echo ($info["school"]); ?></li>
              <li>学历：<?php echo ($info["edu"]); ?></li>
              <li>专业:<?php echo ($info["profession"]); ?></li> 
              <li>籍贯:<?php echo ($info["city"]); ?></li>
            </ul>
           
            <article class="am-article">
            <div class="am-article-hd">
            <p>自我介绍</p>
            </div>
            <div class="am-article-bd">
              <p class="am-article-lead"><?php echo ($info["description"]); ?></p>
            </div>
          </article>
          </div>
          <div data-tab-panel-1 class="am-tab-panel ">
             <ul class="am-list am-list-static am-list-border am-list-striped">
              <li>1.熟练掌握PHP原生语法和面向对象开发。</li>
              <li>2.熟练掌握PHP+MySQL+Apache网站开发。</li>
              <li>3.熟练掌握HTML、CSS、JavaScript、jQuery、Ajax等网页开发技术。</li> 
              <li>4.熟练掌握ThinkPHP框架，熟悉Laravel框架。</li>
              <li>5.熟练掌握MVC开发模式。</li>
              <li>6.熟悉Bootstrap前端框架。</li>
              <li>7.熟悉Linux操作系统，并可搭建LAMP、LNMP环境。</li>
              <li>8.熟悉Git、SVN版本控制器。</li>
            </ul>
          </div>
          <div data-tab-panel-2 class="am-tab-panel ">
            <article class="am-article">
            
            <div class="am-article-hd">
            <p>团队项目：招聘网站</p>
            </div>
            <div class="am-article-bd" onclick="location.href='/index.php/Home/Index/content'">
              <p class="am-article-lead">项目描述：
                使用ThinkPHP框架、MVC开发模式。分为个人用户、企业用户两个模块。
                后台：用户管理、权限管理、分类管理。个人、企业信息管理。
                前台：企业模块有企业认证、资料完善、发布招聘信息、投递记录管理、企业主页管理。个人模块有个人中心、简历管理、投递箱、收藏关注。
              </p>
            </div>
            <div class="am-article-hd">
            <p>个人博客</p>
            </div>
            <div class="am-article-bd" onclick="location.href='/index.php/Home/Index/content2'">
              <p class="am-article-lead">项目描述：
              使用ThinkPHP开发的，分为文章、分类、标签、评论的管理。页面是Bootstrap编写的响应式布局。文章可以置顶、加精、推荐。评论使用jQuery Ajax。</p>
            </div>
            <div class="am-article-hd">
            <p>仿小米商城</p>
            </div>
            <div class="am-article-bd">
              <p class="am-article-lead">项目描述：这是一个使用PHP原生语法面向过程的项目。我自己写的第一个东西，做出了以后还是很有成就感的。</p>
            </div>
          </article>
          </div>
      </div>
  </div>
</div>
    
<!-- 轮播图 -->
<div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
  <ul class="am-slides">
      <li>
        	<img src="/Public/img/1.png">
         
      </li>
      <li>
        	<img src="/Public/img/2.png">
         
      </li>
      <li>
        	<img src="/Public/img/3.png">
         
      </li>
      <li>
        	<img src="/Public/img/4.png">
         
      </li>
  </ul>
</div>
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
            <a href="#" class="">
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