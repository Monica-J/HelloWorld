<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$adminUsersModel=M('login');
    	$dynamicModel=M("dynamic");

    	$username=session('name');
    	// var_dump($username);exit;
    	if($username!=""){
    		$Userresult=$adminUsersModel->where("name='$username'")->select();
    		$this->assign('user',$Userresult);

    		$Dynamicresult=$dynamicModel->order('addtime desc')->select();
    		$this->assign('dynamic',$Dynamicresult);

            // $cate = $dynamicModel->where("name='$username'")->select();
            // $this->assign('cate',$cate);
    		// var_dump($Dynamicresult);exit;          
    		// var_dump($Userresult);exit;

    		// if(IS_POST){
    		// 	$mycondition=array(
      //                  "name"=>$username,
      //                  "content"=>I("post.content")
    		// 		);
    		// 	var_dump($mycondition);
    		// }
    	}
       	$this->display();
    }
    public function adddongtai(){
        if(IS_POST){
            $adminaddModel=D('dynamic');
            $data['writer'] = session('name');
            $data['content'] = I('content');
            $data['section'] = I('post.section');
            
            $data['addtime'] = date('Y-m-d H:i:s');

            if($adminaddModel->add($data)){
                 // echo "<script language='javascript' type='text/javascript'>";
                 // echo "alert('添加成功');";
                 // echo "parent.location.href='".U('Index/index')."'";
                 // echo "</script>";
               $this->redirect("Home/Index/index");
            }
               //  $adminaddModel=D('dynamic');
               //  $nm=$adminaddModel->create();
               //  if(!$nm){
               //  $this->error($adminaddModel->getError());
               //  }
               //  else{
               //      $time=date('Y-m-d H:i:s',time());
               //  $data=array(
               //  "writer"=>$username,
               //  "content"=>I("post.content"),
               // "section"=>I("post.section"),
               //  "name"=>"这是一个标题"
                
               //  );
               //  $data['addtime'] = date("Y-m-d H:i:s"); //添加注册时间

               //  $adminaddModel->add($data);
               //  $condition=array(
               //  'title'=>I('post.title'),
               //  'name'=>I('post.name'),  
               //  'grade'=>I('post.grade')
               //  );
               //  $result=$adminaddModel->where($condition)->count();
               //  if($result>0){
               //  // $this->success("管理员添加成功",U('Index/index'));
               //      echo "<script language='javascript' type='text/javascript'>";
               //      echo "alert('添加成功');";
               //      echo "parent.location.href='".U('Index/index')."'";
               //      echo "</script>";

               //  }
               //  }
    
}

    // public function adddongtai(){
    //     if(IS_POST){
    //     $adminUsersModel=M('login');
    //     $dynamicModel=M("dynamic");
    //     $username=session('name'); 

                                // $content=I("post.content");
                                //     $condition=array(
                                //            "writer"=>$username,
                                //            "content"=>substr($content, 6),
                                //            "addtime"=>date('Y-m-d H:i:s'),
                                //            "section"=>substr($content, 1,4),
                                //            "name"=>"这是一个标题"
                                //         );   
                                // var_dump($content);exit;  

        // $content=I("post.content");
        //     $condition=array(
        //            "writer"=>$username,
        //            "content"=>I("post.content"),
        //            "addtime"=>date('Y-m-d H:i:s'),
        //            "section"=>"公告通知",
        //            "name"=>"这是一个标题"
        //         );   
                                     // $section=section.value();
        
        // $dynamicModel->add($condition);
        // $result=$dynamicModel->where($condition)->count(); 
        // if($result>0){
        //     $this->redirect("index/index");
        // }else{
        //      $this->error("添加失败");
        // }
                                             // var_dump($result);exit;               
    //     }
    }
}