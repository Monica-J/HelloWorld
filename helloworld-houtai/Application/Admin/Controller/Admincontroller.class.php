<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {

	


    // public function index(){
        
    //      $this->display('login');
    // }
    public function login(){
       
         if(IS_POST){
            $adminUsersModel=M('admin');//表名为admin_users,实例化模型时，下划线去掉，后面第一个字母大写
         
         $condition=array( 
                "name" => I("post.name"),
                "password" => I("post.password")
          ); 
         // var_dump($condition);exit;
         $result =$adminUsersModel->where($condition)->count();
         //查询find.select.count方法
         if($result>0){
            session("name",I("post.name"));
            //session存取值，手册
            $this->success("登录成功！",U("user/user_list"));
           
         }
         else{
            $this->error("用户名或密码不正确");
         }
    }
         else{
         $this->display();
         }
     }

}