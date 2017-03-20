<?php
//网站后台执行登录、退出的控制器
namespace Admin\Controller;
use Think\Controller;
class PublicController extends Controller {
   
   //加载登录界面
   public function login()
   {
       $this->display("login");
   }
   
   //执行登录验证
   public function doLogin()
   {
      //执行会员登录验证
      $mod = M("user");
      //获取当前登录用户信息
      $map = array();
      $map['user'] = $_POST['user'];
      $map['pass'] = md5($_POST['pass']);
      $user = $mod->where($map)->find();
      if($user){
          //登录成功！
          session("adminuser",$user); //将user信息以adminuser名放入到session中
         echo "Y";
     
      }else{
        echo "N";
      }
       
   }
   
   //执行退出的方法
   public function doLogout()
   {
       session("adminuser",null); //清除登录者信息（session中）
       $this->display("login");
   }
   

}