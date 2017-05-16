<?php
namespace home\Controller;
use Think\Controller;

class UserController extends Controller{
	public function index(){
	echo 'user';
	}
	public function test($user,$pass){
	echo 'user:'.$user.'<br />pass:'.$pass;
	}
}
