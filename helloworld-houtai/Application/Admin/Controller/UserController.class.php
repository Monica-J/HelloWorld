<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function Index(){
         $this->display();

	

 	
    }
  public function adminadd(){
     	if(IS_POST){
				$adminaddModel=D('admin');
				$nm=$adminaddModel->create();
				if(!$nm){
				$this->error($adminaddModel->getError());
				}
				else{
				    $time=date('Y-m-d H:i:s',time());
				$data=array(
				'name'=>I('post.name'),
				'password'=>I('post.password'),
				'email'=>I('post.email'),
				
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
				$this->success("管理员添加成功",U('user/admin_list'));
				}
				}
    
}
       else{
       	$this->display();
       } 
    }


		public function admin_list(){
		        $adminModel = M("admin");
		        $num = $adminModel->count();
		        $pagecount = 3; 
		        $page = new \Think\Page($num , $pagecount);
		        $page->parameter = $row; //此处的row是数组，为了传递查询条件
		        $page->setConfig('first','首页');
		        $page->setConfig('prev','上一页');
		        $page->setConfig('next','下一页');
		        $page->setConfig('last','尾页');
		        $page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% 第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页 ( '.$pagecount.' 条/页 共 %TOTAL_ROW% 条)');
		        $show = $page->show();

		         $admin= $adminModel->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
		        //var_dump($news);exit;
		         $this->assign('admin',$admin);
		        $this->assign('page',$show);

		        $this->display();

		    
		    }


		    public function admindel(){
        $id = $_GET['id'];
        if(is_array($id)){
            foreach($id as $value){
                M("admin")->delete($value);
            }
            $this->success("批量删除成功！",U("user/admin_list"));
        }else{
            if(M("admin")->delete($id)){
                $this->success("删除成功！",U("user/admin_list"));
            }else{
                $this->error("删除失败！");
            }
        }
    }

    public function admin_edit($id){
        if(isset($_POST['submit'])){
        	// var_dump($id);
            // $upload = new \Think\Upload();// 实例化上传类
            // $upload->maxSize  = 3145728 ;// 设置附件上传大小
            // $upload->exts     = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            // $upload->rootPath = THINK_PATH; // 设置附件上传根目录
            // $upload->savePath = '../Public/uploads/'; // 设置附件上传（子）目录
            // $info = $upload->upload();
            {
                $adminModel = D("admin"); //创建模型
                $data = $adminModel->create(); //组织数据
                if(!$data){
                    exit($adminModel->getError());
                }else{
                    //设置img字段属性(目录+名字)
                   
                    
                    $data['name'] = I('post.name');
                    $data['password'] = I('post.password');
                   
                    $data['email'] = I('post.email');
                    // var_dump($data);exit;
                    
                    if($adminModel->where("id='%d'",$id)->save($data)){
                        $this->success("编辑成功！",U("user/admin_list"));
                    }else{
                        $this->error("编辑失败！");
                    }
                }
            }
        }
        else{
            $id = isset($_GET['id']) ? intval($_GET['id']) : ''; //获得修改用户的ID
            $adminModel = D("admin");
            $admin = $adminModel->where("id='%d'",$id)->find(); //从数据库找到需要修改的用户信息
            $this->assign("admin",$admin);
            $this->display();
        }
    }
    




}