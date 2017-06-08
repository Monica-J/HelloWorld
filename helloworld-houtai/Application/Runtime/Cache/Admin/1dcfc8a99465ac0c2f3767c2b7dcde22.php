<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hello World</title>
<link rel="stylesheet" href="/HelloWorld/helloworld-houtai/Public/end/css/bootstrap.css">
<link href="/HelloWorld/helloworld-houtai/Public/end/css/jquery-ui.css" rel="stylesheet">
<link href="/HelloWorld/helloworld-houtai/Public/end/css/mystyle.css" rel="stylesheet">
<script src="/HelloWorld/helloworld-houtai/Public/end/js/jquery.js"></script>    
<script src="/HelloWorld/helloworld-houtai/Public/end/js/bootstrap.min.js"></script>


</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
   
    <span class="navbar-logo" ><img src="/HelloWorld/helloworld-houtai/Public/end/images/logo.png"></span>
   </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    
    <ul class="nav navbar-nav navbar-right mr">
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-star"></span>欢迎：Administrator</a></li>
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav> 

	<div class="row">
    	<div class=" col-md-2 sidebar">
        <div id="accordion">
        <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>管理员管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            
            <li  ><a href="/HelloWorld/helloworld-houtai/index.php/Admin/user/admin_add.html">添加管理员</a></li>
            <li ><a href="/HelloWorld/helloworld-houtai/index.php/Admin/user/admin_list.html">管理员管理</a></li>
            
            
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>用户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li  ><a href="/HelloWorld/helloworld-houtai/index.php/Admin/cust/user_list.html">用户管理</a></li>
           
           
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>用户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li  ><a href="/HelloWorld/helloworld-houtai/index.php/Admin/user/user_list.html">用户管理</a></li>
            <li ><a href="/HelloWorld/helloworld-houtai/index.php/Admin/user/user_pass.html">修改用户信息</a></li>
           
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-file"></span>发帖管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/HelloWorld/helloworld-houtai/index.php/Admin/post/post_add.html">置顶帖子</a></li>
            <li><a href="/HelloWorld/helloworld-houtai/index.php/Admin/post/post_list.html">管理帖子</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-book"></span>版块管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/HelloWorld/helloworld-houtai/index.php/Admin/section/section_add.html">添加版块</a></li>
            <li><a href="/HelloWorld/helloworld-houtai/index.php/Admin/section/section_list.html">版块列表</a></li>
          </ul>
         
        </div>
      </div>
    	<div class="col-md-10 col-md-offset-2 ">
    	  <ol class="breadcrumb">
    	    <li><a href="#">首页</a></li>
    	    <li><a href="#">帐户管理</a></li>
    	    <li class="active">添加管理员</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3>添加管理员 <small>Admin Add</small></h3>
    	    <div class="list-group ">
    	      <div class="list-group-item">
    	       <form role="form" action="/HelloWorld/helloworld-houtai/index.php/Admin/user/adminadd" method="post" enctype="multipart/form-data">

    	         <!--  <div class="input-group"> <span class="input-group-addon">用<img src="images/em.png" alt="" width="6" height="20">户<img src="images/em.png" alt="" width="6" height="20">名：</span>
    	            <input type="text" class="form-control" placeholder="" >
  	            </div> -->
    	          <div class="input-group "> <span class="input-group-addon" for="inputWarning1">姓名：</span>
    	            <input type="text" name="name" class="form-control" placeholder="" id="input">
  	            </div>
    	          <div class="input-group"> <span class="input-group-addon">设置密码：</span>
                  <input type="text" name="password" class="form-control" placeholder="123456" >
                </div>
    	          <div class="input-group"> <span class="input-group-addon">电子邮箱：</span>
    	            <input type="email" name="email" class="form-control" placeholder="">
  	            </div>
    	         <!--  <div class="input-group"> <span class="input-group-addon">添加时间：</span>
    	            <input type="text" class="form-control" placeholder="2014-05-22" >
  	            </div> -->
               
               
    	          <div class="input-group">
    	            <button type="submit" class="btn btn-primary "> &nbsp;&nbsp;保<img src="images/em.png" alt="" width="20" height="20">存&nbsp;&nbsp;</button>
  	            </div>
  	          </form>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
	</div>
        	
	
</div>
<script src="/HelloWorld/helloworld-houtai/Public/end/js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>