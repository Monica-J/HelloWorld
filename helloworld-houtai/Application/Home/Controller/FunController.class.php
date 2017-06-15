<?php
namespace Home\Controller;
use Think\Controller;
class FunController extends Controller {
    public function index(){
    	// var_dump(1);exit;
       	$this->display();
    }

    public function rmht(){
    	$adminUsersModel=M('login');
    	$dynamicModel=M("dynamic");
    	$username=session('name');
    	// var_dump($username);exit;
    	if($username!=""){
    		$Userresult=$adminUsersModel->where("name='$username'")->select();
    		$this->assign('user',$Userresult);

    		$Dynamicresult=$dynamicModel->where("section='热门话题'")->order('addtime desc')->select();
    		$this->assign('dynamic',$Dynamicresult);
    		// var_dump($Dynamicresult);exit;
    	}

    	$this->display();
    }

    //  public function rmht1(){
    //     $adminUsersModel=M('login');
    //     $dynamicModel=M("dynamic");
    //     $username=session('name');
    //     // var_dump($username);exit;
    //     if($username!=""){
    //         $Userresult=$adminUsersModel->where("name='$username'")->select();
    //         $this->assign('user',$Userresult);

    //         $Dynamicresult=$dynamicModel->where("section='热门话题'")->order('addtime desc')->select();
    //         $this->assign('dynamic',$Dynamicresult);
    //         // var_dump($Dynamicresult);exit;
    //     }

    //     $this->display();
    // }

    public function ggtz(){
    	$adminUsersModel=M('login');
    	$dynamicModel=M("dynamic");
    	$username=session('name');

    	if($username!=''){
    		$Userresult=$adminUsersModel->where("name='$username'")->select();
    		$this->assign('user',$Userresult);

    		$Dynamicresult=$dynamicModel->where("section='公告通知'")->order('addtime desc')->select();
    		$this->assign('dynamic',$Dynamicresult);
    		// var_dump($Dynamicresult);exit;    	


    	}  
    	$this->display();  	
    }

        public function xshd(){
    	$adminUsersModel=M('login');
    	$dynamicModel=M("dynamic");
    	$username=session('name');

    	if($username!=''){
    		$Userresult=$adminUsersModel->where("name='$username'")->select();
    		$this->assign('user',$Userresult);

    		$Dynamicresult=$dynamicModel->where("section='学生活动'")->order('addtime desc')->select();
    		$this->assign('dynamic',$Dynamicresult);
    		// var_dump($Dynamicresult);exit;    	


    	}  
    	$this->display();  	
    }

        public function jsjl(){
    	$adminUsersModel=M('login');
    	$dynamicModel=M("dynamic");
    	$username=session('name');

    	if($username!=''){
    		$Userresult=$adminUsersModel->where("name='$username'")->select();
    		$this->assign('user',$Userresult);

    		$Dynamicresult=$dynamicModel->where("section='技术交流'")->order('addtime desc')->select();
    		$this->assign('dynamic',$Dynamicresult);
    		// var_dump($Dynamicresult);exit;    	


    	}  
    	$this->display();  	
    }

        public function files_share(){
    	$adminUsersModel=M('login');
    	$dynamicModel=M("dynamic");
    	$username=session('name');

    	if($username!=''){
    		$Userresult=$adminUsersModel->where("name='$username'")->select();
    		$this->assign('user',$Userresult);

    		$Dynamicresult=$dynamicModel->where("section='技术交流'")->order('addtime desc')->select();
    		$this->assign('dynamic',$Dynamicresult);
    		// var_dump($Dynamicresult);exit;    	


    	}  
    	$this->display();  	
    }

        public function sdtc(){
    	$adminUsersModel=M('login');
    	$dynamicModel=M("dynamic");
    	$username=session('name');

    	if($username!=''){
    		$Userresult=$adminUsersModel->where("name='$username'")->select();
    		$this->assign('user',$Userresult);

    		$Dynamicresult=$dynamicModel->where("section='树洞吐槽'")->order('addtime desc')->select();
    		$this->assign('dynamic',$Dynamicresult);
    		// var_dump($Dynamicresult);exit;    	


    	}  
    	$this->display();  	
    }               
}