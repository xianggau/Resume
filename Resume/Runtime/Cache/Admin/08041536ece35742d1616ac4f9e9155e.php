<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>J</title>
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

<body data-type="generalComponents">


    <header class="am-topbar am-topbar-inverse admin-header">
        <div class="am-topbar-brand">
           <h3>简历后台</h3>
        </div>
        <div class="am-icon-list tpl-header-nav-hover-ico am-fl am-margin-right">

        </div>
        <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>
	
        <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

            <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list tpl-header-list">
                <li class="am-dropdown" data-am-dropdown data-am-dropdown-toggle>
                    <a class="am-dropdown-toggle tpl-header-list-link" href="javascript:;">
                        <span class="tpl-header-list-user-nick">王杰</span><span class="tpl-header-list-user-ico"> <img src="/Public/img/img.png"></span>
                    </a>
                </li>
                <li><a href="/index.php/Admin/Public/doLogout" class="tpl-header-list-link"><span class="am-icon-sign-out tpl-header-list-ico-out-size"></span></a></li>
            </ul>
        </div>
    </header>
    <div class="tpl-page-container tpl-page-header-fixed">
        <div class="tpl-left-nav tpl-left-nav-hover">
            <div class="tpl-left-nav-title">
                我的资料
            </div>
            <div class="tpl-left-nav-list">
                <ul class="tpl-left-nav-menu">


                    <li class="tpl-left-nav-item">
                        <!-- 打开状态 a 标签添加 active 即可   -->
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list ">
                            <i class="am-icon-wpforms"></i>
                            <span>我的资料</span>
                            <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转  -->
                 
                        </a>
                    </li>
                    <li class="tpl-left-nav-item">
                        <!-- 打开状态 a 标签添加 active 即可   -->
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list ">
                            <i class="am-icon-wpforms"></i>
                            <span>我的技术</span>
                            <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转  -->
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <ul class="tpl-left-nav-sub-menu" style="display: block;">
                            <li>
                                <!-- 打开状态 a 标签添加 active 即可   -->
                                <a href="#" class="active">
                                    <i class="am-icon-angle-right"></i>
                                    <span>待开发</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- 打开状态 添加 display:block-->
                    </li>
                    <li class="tpl-left-nav-item">
                        <!-- 打开状态 a 标签添加 active 即可   -->
                        <a href="javascript:;" class="nav-link tpl-left-nav-link-list ">
                            <i class="am-icon-wpforms"></i>
                            <span>我的项目</span>
                            <!-- 列表打开状态的i标签添加 tpl-left-nav-more-ico-rotate 图表即90°旋转  -->
                            <i class="am-icon-angle-right tpl-left-nav-more-ico am-fr am-margin-right tpl-left-nav-more-ico-rotate"></i>
                        </a>
                        <!-- 打开状态 添加 display:block-->
                        <ul class="tpl-left-nav-sub-menu" style="display: block;">
                            <li>
                                <!-- 打开状态 a 标签添加 active 即可   -->
                                <a href="uin.html" class="active">
                                    <i class="am-icon-angle-right"></i>
                                    <span>待开发</span>
                                    <i class="am-icon-star tpl-left-nav-content-ico am-fr am-margin-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="tpl-left-nav-item">
                        <a href="/index.php/Home/Index/index" class="nav-link tpl-left-nav-link-list">
                         <span>去前台</span>

                        </a>
                    </li>
                </ul>
            </div>
        </div>





        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                王杰的个人简历
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">资料</a></li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 添加
                    </div>
                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" id="info">
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">姓名</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" placeholder="姓名 " name="name" value="<?php echo ($info["name"]); ?>">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">生日</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-name" placeholder="生日"name="birthday" value="<?php echo ($info["birthday"]); ?>">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">邮件</label>
                                    <div class="am-u-sm-9">
                                        <input type="email" id="user-email" placeholder="电子邮件 " name="email" value="<?php echo ($info["email"]); ?>">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-phone" class="am-u-sm-3 am-form-label">电话</label>
                                    <div class="am-u-sm-9">
                                        <input type="tel" id="user-phone" placeholder="电话号码" name="phone" value="<?php echo ($info["phone"]); ?>">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label class="am-u-sm-3 am-form-label">学校</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="" placeholder="毕业学校" name="school" value="<?php echo ($info["school"]); ?>">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label class="am-u-sm-3 am-form-label">学历</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-weibo" placeholder="学历" name="edu" value="<?php echo ($info["edu"]); ?>">
                                    </div>
                                </div>
                                 <div class="am-form-group">
                                    <label class="am-u-sm-3 am-form-label">专业</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-weibo" placeholder="专业" name="profession" value="<?php echo ($info["profession"]); ?>">
                                    </div>
                                </div>
                                 <div class="am-form-group">
                                    <label class="am-u-sm-3 am-form-label">籍贯</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" id="user-weibo" placeholder="籍贯" name="city" value="<?php echo ($info["city"]); ?>">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">自我介绍</label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" rows="7" id="user-intro" placeholder="输入个人简介" name="description" ><?php echo ($info["description"]); ?></textarea>
                                        <small>250字以内写出你的一生...</small>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="button" class="am-btn am-btn-primary" onclick="doSubmit()">确认修改</button>
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="1">
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <button
      type="button"
      class="am-btn am-btn-primary"
      data-am-modal="{target: '#my-alert'}" style="display: none;" id="button">
      Alert
    </button>

    <div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
      <div class="am-modal-dialog">
       
        <div class="am-modal-bd">
          修改成功
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
        function doSubmit(){
             $.ajax({
                type:'post',             //请求方式GET
                url :'/index.php/Admin/Index/edit',           //ajax请求地址
                data:$("#info").serialize(), //请求传递的参数
                dataType:'json',        //预期服务器返回的数据类型
                async : true,           //是否异步
                success: function(data){
                    // alert(data);
                    if(data == "1"){
                       $("#button").click();
                    }  
                 }  //ajax成功后的回调函数
               
            });
         }
    </script>
</body>

</html>