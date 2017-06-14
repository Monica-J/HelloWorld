<?php
namespace Admin\Controller;
use Think\Controller;
class PostController extends Controller {
    public function Index(){
         $this->display();

	

 	
    }



		public function post_list(){
		        $adminModel = M("dynamic");
		        $num = $adminModel->count();
		        $pagecount = 20; 
		        $page = new \Think\Page($num , $pagecount);
		        $page->parameter = $row; //此处的row是数组，为了传递查询条件
		        $page->setConfig('first','首页');
		        $page->setConfig('prev','上一页');
		        $page->setConfig('next','下一页');
		        $page->setConfig('last','尾页');
		        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		        $show = $page->show();

		         $post= $adminModel->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
		        //var_dump($news);exit;
		         $this->assign('dynamic',$post);
		        $this->assign('page',$show);

		        $this->display();

		    
		    }

		    public function postdel(){
        $id = $_GET['id'];
        if(is_array($id)){
            foreach($id as $value){
                M("dynamic")->delete($value);
            }
            $this->success("批量删除成功！",U("post/post_list"));
        }else{
            if(M("dynamic")->delete($id)){
                // $this->success("删除成功！",U("post/post_list"));
                 $this->redirect("Admin/post/post_list");
            }else{
                $this->error("删除失败！");
            }
        }
    }

}