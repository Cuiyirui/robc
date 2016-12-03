<?php
namespace Home\Controller;
use Think\Controller;
class AboutProjectController extends Controller {
	/*
	显示
	 */
    public function show(){
        $this->display();
    }
    /*
    显示详细信息
     */
    public function showdetail(){
    	$itemname=$_POST["itemname"];
    	$this->ajaxReturn($itemname);
    }
}