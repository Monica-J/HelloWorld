<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$adminUsersModel=M('login');
    	$dynamicModel=M("dynamic");

    	$username=session('name');
    	// var_dump($username);exit;
    	if($username!=""){
    		$Userresult=$adminUsersModel->where("name='$username'")->select();
    		$this->assign('user',$Userresult);

    		$Dynamicresult=$dynamicModel->where("name!='$username'")->limit(3)->select();
    		$this->assign('dynamic',$Dynamicresult);
    		// var_dump($Dynamicresult);exit;          
    		// var_dump($Userresult);exit;

    		// if(IS_POST){
    		// 	$mycondition=array(
      //                  "name"=>$username,
      //                  "content"=>I("post.content")
    		// 		);
    		// 	var_dump($mycondition);
    		// }
    	}

       

       	$this->display();
    }
}