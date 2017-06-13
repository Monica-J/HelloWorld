<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    // public function index(){
    //    	$this->display('login');
    // }
     public function login(){
       
         if(IS_POST){
            $adminUsersModel=M('login');//表名为admin_users,实例化模型时，下划线去掉，后面第一个字母大写
         
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
            // $this->success("登录成功！",U("Index/index"));
            $this->redirect("Home/Index/index");
              // $this->redirect("Admin/News/allCompanynews");

           
         }
         else{
            $this->error("用户名或密码不正确");
         }
    }
         else{
         $this->display();
         }
     }

     public function signup(){
        if(IS_POST){
                $adminaddModel=D('login');
                $nm=$adminaddModel->create();
                if(!$nm){
                $this->error($adminaddModel->getError());
                }
                else{
                    $time=date('Y-m-d H:i:s',time());
                $data=array(
                'name'=>I('post.name'),
                'password'=>I('post.password'),
               
                
                );
                $data['addtime'] = date("Y-m-d H:i:s"); //添加注册时间
                   
                $adminaddModel->add($data);
                $condition=array(
                'title'=>I('post.title'),
                'name'=>I('post.name'),  
                'grade'=>I('post.grade')
                );
                $result=$adminaddModel->where($condition)->count();
                if($result>0){
                $this->success("用户添加成功",U('Login/login'));
                }
                }
    
}
       else{
        $this->display();
       } 
    }


}
