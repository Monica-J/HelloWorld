<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
	public function index(){
	// echo 'user';
		$this->display();
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
}
