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
    	    <li class="active">版块列表</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <!-- <h3>新进图书 <small>Books List</small></h3> -->
    	    <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table  table-striped table-hover ">
    	      <tr>
    	       <!--  <th width="4%"><input type="checkbox" name="checkbox10" id="checkbox10"></th> -->
             <th width="8%">id</th>
    	        <th width="25%">版块名称</th>
    	        <th width="12%">版主</th>
    	        <!-- <th width="27%">出版社</th> -->
    	        <th width="15%">创建日期</th>
    	       
    	        <th width="20%">操作</th>
  	        </tr>
    	      <tr>
    	       <!--  <td><input type="checkbox" name="checkbox" id="checkbox">
    	          </td> -->
              <td>id</td>
    	        <td>我的收藏</td>
    	        <td>李婧</td>
    	        <!-- <td>Vestibulum id ligula porta felis euismod</td> -->
    	        <td>2014-05-22 </td>
    	        <!-- <td>1234567890</td>
    	        <td>1234567890</td> -->
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	     
  	      </table>
  	    </div>
    	  <div class="input-group pull-left form">
    	    <button type="submit" class="btn btn-danger "> 删 除</button>
  	    </div>
    	  <ul class="pagination pull-right" >
    	    <li class="disabled"><a href="#">&laquo;</a></li>
    	    <li class="active"><a href="#">1</a></li>
    	    <li><a href="#">2</a></li>
    	    <!-- <li><a href="#">3</a></li>
    	    <li><a href="#">4</a></li> -->
    	    <li><a href="#">&raquo;</a></li>
  	    </ul>
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