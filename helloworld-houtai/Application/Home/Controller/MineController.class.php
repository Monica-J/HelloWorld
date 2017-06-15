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
}

