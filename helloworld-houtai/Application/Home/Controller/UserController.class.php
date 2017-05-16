<?php

namespace home\Controller;
use Think\Controller;
use Think\Model;

class UserController extends Controller{
	public function index(){
	echo 'user';
	}
	public function test($user,$pass){
	echo 'user:'.$user.'<br />pass:'.$pass;
	}
	public function model(){
		$user = new Model('User');
		//var_dump($user);
		var_dump($user->select());
	}
}
