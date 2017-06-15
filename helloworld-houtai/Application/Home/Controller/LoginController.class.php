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
         $result =$adminUsersModel->where($condition)->count();
                  // var_dump($condition);exit;
         //查询find.select.count方法
         if($result>0){
            session("name",I("post.name"));

            $username=session('name');
            // var_dump($username);exit;
            
            // $Userresult=$adminUsersModel->where("name=".session("name"))->select();
            // $this->assign("user",$Userresult);
            //  var_dump($Userresult); exit;
            // var_dump($name);exit;
            //session存取值，手册
            // $this->success("登录成功！",U("Index/index"));
            $this->redirect("Home/Index/index");
              // $this->redirect("Admin/News/allCompanynews");
            // var_dump($condition);exit;
         }
         else{
            $this->error("用户名或密码不正确");
         }
    }
         else{
            // var_dump($condition);exit;
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
                'guanzhu'=>0,
                'fans'=>0,
                'tiezi'=>0
               
                
                );
                $password=I('post.password');
                $repassword=I('post.repassword');
                // var_dump($data);exit;
                $data['addtime'] = date("Y-m-d H:i:s"); //添加注册时间
                   
                
                $condition=array(
                'title'=>I('post.title'),
                'name'=>I('post.name'),  
                'grade'=>I('post.grade')
                );

               // var_dump($password==$repassword);exit;
                    if($password==$repassword){
                        $adminaddModel->add($data);
                        $result=$adminaddModel->where($condition)->count(); 
                $this->success("用户添加成功",U('Login/login'));
                                           
            }else{
                 $this->error("注册失败");
                 $this->redirect("Login/login");
            }
            
                
                }
    
}
       else{
        $this->display();
       } 
    }


}
