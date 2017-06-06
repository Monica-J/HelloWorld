<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class UserController extends Controller{
	public function index(){
		// $this->display();
		echo 'User index';
	}
	public function test($user,$pass){
	echo 'user:'.$user.'<br />pass:'.$pass;
	}
	public function model(){
			$user = new Model('User');
			var_dump($user->select());
		}
}

	// public function test($user,$pass){
	// echo 'user:'.$user.'<br />pass:'.$pass;
	// }
	// public function model(){
	// 	$user = new Model('User');
	// 	var_dump($user);
	// 	var_dump($user->select());
	// 	$user = D('user');
	// 	var_dump($user->select());
	// }
	// $user = D('user');
	// var_dump($user->select());