<?php
namespace Home\Controller;
use Think\Controller;
class MineController extends Controller {
    public function index(){
       	$this->display();
    }

    public function admin(){
    	$adminUsersModel=M('login');
    	$dynamicModel=M("dynamic");
    	$username=session('name'); 
    	// var_dump($username);exit;
    	if($username!=""){
    		$Userresult=$adminUsersModel->where("name='$username'")->select();
    		$this->assign('user',$Userresult);
    		// var_dump($Userresult);exit;

    		$Dynamicresult=$dynamicModel->where("writer='$username'")->order('addtime desc')->select();
    		$this->assign('dynamic',$Dynamicresult);
    		// var_dump($Dynamicresult);exit;
    	}    	   	
    	$this->display();
    }

        public function fensi(){
    	$adminUsersModel=M('login');
    	$dynamicModel=M("dynamic");
    	$username=session('name'); 
    	// var_dump($username);exit;
    	if($username!=""){
    		$Userresult=$adminUsersModel->where("name='$username'")->select();
    		$this->assign('user',$Userresult);
    		// var_dump($Userresult);exit;

    		$Dynamicresult=$dynamicModel->where("writer='$username'")->order('addtime desc')->select();
    		$this->assign('dynamic',$Dynamicresult);
    		// var_dump($Dynamicresult);exit;
    	}    	   	
    	$this->display();
    }

        public function shoucang(){
    	$adminUsersModel=M('login');
    	$dynamicModel=M("dynamic");
    	$username=session('name'); 
    	// var_dump($username);exit;
    	if($username!=""){
    		$Userresult=$adminUsersModel->where("name='$username'")->select();
    		$this->assign('user',$Userresult);
    		// var_dump($Userresult);exit;

    		$Dynamicresult=$dynamicModel->where("writer='$username'")->order('addtime desc')->select();
    		$this->assign('dynamic',$Dynamicresult);
    		// var_dump($Dynamicresult);exit;
    	}    	   	
    	$this->display();
    } 

        public function guanzhu(){
    	$adminUsersModel=M('login');
    	$dynamicModel=M("dynamic");
    	$username=session('name'); 
    	// var_dump($username);exit;
    	if($username!=""){
    		$Userresult=$adminUsersModel->where("name='$username'")->select();
    		$this->assign('user',$Userresult);
    		// var_dump($Userresult);exit;

    		$Dynamicresult=$dynamicModel->where("writer='$username'")->order('addtime desc')->select();
    		$this->assign('dynamic',$Dynamicresult);
    		// var_dump($Dynamicresult);exit;
    	}    	   	
    	$this->display();
    }

        public function shezhi(){
        $adminUsersModel=M('login');
        $dynamicModel=M("dynamic");
        $username=session('name'); 
        // var_dump($username);exit;
        if($username!=""){
            $Userresult=$adminUsersModel->where("name='$username'")->select();
            $this->assign('user',$Userresult);
            // var_dump($Userresult);exit;
            // var_dump($Dynamicresult);exit;
        }           
        $this->display();
    }    

    public function xiugai(){
        if(IS_POST){
        $adminUsersModel=M('login');
        $dynamicModel=M("dynamic");
        $username=session('name'); 
        // var_dump($username);exit;
        $password=I("post.password");
        $birthday=I("post.birthday"); 
        $gxqm=I("post.gxqm");  
        // var_dump($birthday);exit;  
        $data = array('password'=>$password,'birthday'=>$birthday,
         'gxqm'=>$gxqm);
        $result=$adminUsersModel->where("name='$username'")->setField($data);  
        // var_dump($result);exit; 
        if($result==1) {
            $this->redirect("index/index");            
        }else{
            dump("error");
        }         
        }
        $this->display();
    }

           
}

