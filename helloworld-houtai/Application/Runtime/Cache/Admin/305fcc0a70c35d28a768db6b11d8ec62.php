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
      <li><a href="/HelloWorld/helloworld-houtai/index.php/Admin/Admin/login.html" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
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
    	    <li><a href="#">版块管理</a></li>
    	    <li class="active">添加版块</li>
  	    </ol>
    	  <h3 class="down">添加版块 <small> Add</small></h3>
    	 
   	  <div class="list-group form">
    	    <form enctype="multipart/form-data" class="form-horizontal" role="form">
            <div class="list-group-item">
              <label for="inputEmail3" class="col-sm-2 control-label">版块标题</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" id="inputEmail3" placeholder="">
              </div>
            </div>
            <div class="list-group-item">
              <label for="inputEmail3" class="col-sm-2 control-label">创建时间</label>
              <div class="col-sm-10"><input type="input" class="form-control" id="inputEmail3" placeholder="2017-05-10" ></div>
            </div>
           
            <div class="list-group-item">
              <label for="inputEmail3" class="col-sm-2 control-label">管理员</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" id="inputEmail3" placeholder="李婧">
              </div>
            </div>
           
          
           <!--  <div class="list-group-item">
               <label for="inputEmail3" class="col-sm-2 control-label">内容</label>
              <div class="col-sm-10">
                
                <textarea id="editor_id" name="content" style="width:90%;height:300px;"> 
                </textarea>
              </div>
            </div> -->
            <div class="list-group-item">
              <div class="col-sm-offset-2 col-sm-5">
              <div class="row">
              <div class=" col-sm-5">
                <button type="submit" class="btn btn-primary">添 加 版 块</button>
              </div>
              <div class=" col-sm-5">
                <button type="submit" class="btn btn-warning">重 置 内 容</button>
              </div>
              </div>
              </div>
            </div>
          </form>
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