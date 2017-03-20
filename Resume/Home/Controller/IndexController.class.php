<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
    	$mod = M("info");
    	$info = $mod->find();
    	$this->assign("info",$info);
    	$this->display("index");
    }
    public function content()
    {
    	$this->display("content");
    }
     public function content2()
    {
    	$this->display("content2");
    }

	
}