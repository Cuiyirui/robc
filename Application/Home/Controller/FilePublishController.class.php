<?php
namespace Home\Controller;
use Think\Controller;
class FilePublishController extends Controller {
	/*
	显示
	 */
    public function show(){
        $this->display();
    }
    /*
    显示项目详细信息
     */
    public function showDetail(){
    	$itemname=$_POST["itemname"];
    	$this->ajaxReturn($itemname);
    }
}