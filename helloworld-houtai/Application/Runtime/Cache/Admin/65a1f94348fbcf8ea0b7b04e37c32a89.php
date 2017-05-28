<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hello World</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/jquery-ui.css" rel="stylesheet">
<link href="css/mystyle.css" rel="stylesheet">
<script src="js/jquery.js"></script>    
<script src="js/bootstrap.min.js"></script>


</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
   
    <span class="navbar-logo" > Hello World</span>
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
          <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li  ><a href="user_list.html">用户管理</a></li>
               <li  ><a href="user_add.html">添加管理员</a></li>
            <li ><a href="user_pass.html">修改个人密码</a></li>
            <li ><a href="user_edit.html">修改个人信息</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-file"></span>发帖管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="post_add.html">置顶帖子</a></li>
            <li><a href="post_list.html">管理帖子</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-book"></span>版块管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li ><a href="section_add.html">添加版块</a></li>
            <li><a href="section_list.html">删除版块</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>关键字<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li ><a href="key_list.html">关键字管理</a></li>
          </ul>
        </div>
      </div>
        <div class="col-md-10 col-md-offset-2 ">
               		<ol class="breadcrumb">
  <li><a href="#">首页</a></li>
  
</ol>
        	<div class="row pad">
            	<div class="col-md-6">
                <div class="panel panel-default">
  <div class="panel-body">
    <img src="images/main1.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >置顶帖子<span>2016-05-22</span></h5>
    	<p>作为临时活动的通知，起到醒目的作用。 能够添加置顶帖和取消置顶帖的只有管理员</p>        
    </div>
    <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>
 <span class="info">已经添加：<span class="red">421</span>条</span>
    </div>
</div>
                </div>
                <div class="col-md-6">
                <div class="panel panel-default">
   <div class="panel-body">
     <img src="images/main2.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >账户管理<span>2016-05-22</span></h5>
    	<p>统一管理用户账户，可以对用户进行修改、删除，并且可以修改自己的个人信息和</p>        
    </div>
     <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>

    </div>   
    </div>
</div>
                </div>
                
                <div class="row pad">
            	<div class="col-md-6">
                <div class="panel panel-default">
  <div class="panel-body">
    <img src="images/main3.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >添加版块<span>2014-06-22</span></h5>
    	<p>打造个性的学院论坛，添加模块可以让论坛更加有特点，更有吸引力</p>        
    </div>
    
     <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>
    <span class="info">已经添加：<span class="red">8</span>块 </span>
    </div>
</div>
                </div>
               <!--  <div class="col-md-6">
                <div class="panel panel-default">
   <div class="panel-body">
     <img src="images/main4.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >添加标签<span>2014-06-22</span></h5>
    	<p>添加图书常用标签，为用户提供可选标签，并且可以对标签进行修改和删除管理。</p>        
    </div>
     <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>
 <span class="info">已经添加：<span class="red">8249</span>个</span>
    </div>   
    </div>
</div>
                </div> -->
                <div class="col-md-6">
                <div class="panel panel-default">
  <div class="panel-body">
    <img src="images/main5.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >添加关键字<span>2014-06-22</span></h5>
      <p>为帖子添加关键字，使用户搜索时可以准确、快速地定位到帖子。</p>        
    </div>
     <span class="info">已经添加：<span class="red">87249</span>个</span>
     <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>
    </div>
</div>
                </div>
                <div class="row pad">
            	<div class="col-md-6">
                <div class="panel panel-default">
   <div class="panel-body">
     <img src="images/main6.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >日志管理<span>2014-06-22</span></h5>
      <p>系统日志自动生成，在此可以方便地查看和管理系统日志。</p>        
    </div>
    
     <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>
 <span class="info">已经生成：<span class="red">8249</span>条</span>
    </div>   
    </div>
</div>
                </div>
               <!--  <div class="col-md-6">
                <div class="panel panel-default">
   <div class="panel-body">
     <img src="images/main6.gif" width="63" height="63" class="pull-left img1">
    <div class=" nr">
        <h5 >日志管理<span>2014-06-22</span></h5>
    	<p>系统日志自动生成，在此可以方便地查看和管理系统日志。</p>        
    </div>
    
     <button type="button" class="btn btn-primary pull-right">点击进入
  <span class="glyphicon glyphicon-circle-arrow-right"></span> 
</button>
 <span class="info">已经生成：<span class="red">8249</span>条</span>
    </div>   
    </div>
</div>
                </div> -->
            </div>
         	

        </div>
        	
	
</div>
<script src="js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>