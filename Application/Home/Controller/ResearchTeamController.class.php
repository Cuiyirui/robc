<?php
namespace Home\Controller;
use Think\Controller;
class ResearchTeamController extends Controller {
	/*
	显示
	 */
    public function show(){
        $this->display();
    }
    /*
    显示团队详细信息
     */
    public function showTeamDetail(){
    	$itemname=$_POST["itemname"];
    	$this->ajaxReturn($itemname);
    }
    /*
    显示成员详细信息
     */
    public function showMemberDetail(){
        $itemname=$_POST["itemname"];
        $this->ajaxReturn($itemname);
    }
}