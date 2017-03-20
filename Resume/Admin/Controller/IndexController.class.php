<?php
namespace Admin\Controller;
class IndexController extends CommonController {
    
    public function index()
    {
    	$mod = M("info");
  		$info = $mod->find();
  		$this->assign("info",$info);
    	$this->display("index");
    }

  	public function edit()
  	{
  		if(!empty($_POST['name'])){
        $mod =M("info");
        $mod->create();
        $m = $mod->save();
        if($m > 0){
          echo 1;
        }
      }
  	}
}