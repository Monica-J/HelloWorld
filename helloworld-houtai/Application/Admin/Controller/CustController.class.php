<?php
namespace Admin\Controller;
use Think\Controller;
class CustController extends Controller {
    public function index(){
        $this->display();

    }
    public function user_list(){
		        $userModel = M("login");
		        $num = $userModel->count();
		        $pagecount = 10; 
		        $page = new \Think\Page($num , $pagecount);
		        $page->parameter = $row; //此处的row是数组，为了传递查询条件
		        $page->setConfig('first','首页');
		        $page->setConfig('prev','上一页');
		        $page->setConfig('next','下一页');
		        $page->setConfig('last','尾页');
		        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		        $show = $page->show();

		         $user= $userModel->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
		        //var_dump($news);exit;
		         $this->assign('user',$user);
		        $this->assign('page',$show);

		        $this->display();

		    
		    }
		        public function userdel(){
        $id = $_GET['id'];
        if(is_array($id)){
            foreach($id as $value){
                M("login")->delete($value);
            }
            $this->success("批量删除成功！",U("cust/user_list"));
        }else{
            if(M("login")->delete($id)){
                // $this->success("删除成功！",U("cust/user_list"));
                 $this->redirect("Admin/cust/user_list");
            }else{
                $this->error("删除失败！");
            }
        }
    }

}