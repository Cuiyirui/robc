<?php
namespace Home\Controller;
use Think\Controller;
class AcademicComunicationController extends Controller {
	/*
	显示
	 */
    public function show(){
        $this->display();
    }
    /*
    显示会议详细信息
     */
    public function showDetail(){
    	$itemname=$_POST["itemname"];
    	$this->ajaxReturn($itemname);
    }
        //     //帖子总数，分页用
        // $post=M('post');
        // $num_post=$post->count();
        // $num_page=ceil($num_post/5);
        // $this->assign('num_page',$num_page);
        // //查找热门用户
        // $m= M();
        // $sql="select name,post.userid,count(*) as num_post from post 
        // join user on user.userid=post.userid
        // group by post.userid
        // order by num_post desc
        // limit 5";
        // $hot_user=$m->query($sql);
        // $this->assign("hot_user",$hot_user);
        // //计算所有帖子的包含的时间和帖子数
        // $posttime=$post->getField('time',true);
        // foreach ($posttime as $key => $time) {
        //     $time=substr($time,0,7);
        //    if(!isset($time_info[$time])){
        //      $time_info[$time]=0;
        //    } 
        //    $time_info[$time]++;
        // }
        // krsort($time_info);
        // $this->assign('time_info',$time_info);
        // $this->display();
}