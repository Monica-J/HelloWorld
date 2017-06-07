<?php
namespace Admin\Controller;
use Think\Controller;
class CustController extends Controller {
    public function index(){
        $this->display('user_list');

    }
}