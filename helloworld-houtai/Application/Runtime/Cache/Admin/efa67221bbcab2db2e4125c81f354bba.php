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
          <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li  ><a href="/HelloWorld/helloworld-houtai/index.php/Admin/user/user_list.html">用户管理</a></li>
               <li  ><a href="/HelloWorld/helloworld-houtai/index.php/Admin/user/admin_add.html">添加管理员</a></li>
                <li ><a href="/HelloWorld/helloworld-houtai/index.php/Admin/user/admin_list.html">管理员管理</a></li>
            <li ><a href="/HelloWorld/helloworld-houtai/index.php/Admin/user/user_pass.html">修改个人密码</a></li>
            <li ><a href="/HelloWorld/helloworld-houtai/index.php/Admin/user/admin_edit.html">修改个人信息</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-file"></span>发帖管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/HelloWorld/helloworld-houtai/index.php/Admin/post/post_add.html">置顶帖子</a></li>
            <li><a href="/HelloWorld/helloworld-houtai/index.php/Admin/post/post_list.html">管理帖子</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-book"></span>版块管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/HelloWorld/helloworld-houtai/index.php/Admin/section/section_add.html">添加版块</a></li>
            <li><a href="/HelloWorld/helloworld-houtai/index.php/Admin/section/section_list.html">删除版块</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>关键字<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li ><a href="/HelloWorld/helloworld-houtai/index.php/Admin/key/key_list.html">关键字管理</a></li>
          </ul>
        </div>
      </div>
    	<div class="col-md-10 col-md-offset-2 ">
    	  <ol class="breadcrumb">
    	    <li><a href="#">首页</a></li>
    	    <li><a href="#">帐户管理</a></li>
    	    <li class="active">系统用户管理</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3>系统管理列表 <small>Administrator List</small></h3>
    	    <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table  table-striped table-hover ">
    	      <tr>
    	        <th width="4%"><input type="checkbox" name="checkbox10" id="checkbox10"></th>
    	        <th width="13%">用户名</th>
    	        <th width="10%">真实姓名</th>
    	        <th width="13%">手机号</th>
    	        <th width="21%">邮箱</th>
    	        <th width="11%">注册时间</th>
    	        <th width="17%">操作</th>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox" id="checkbox">
    	          <label for="checkbox"></label></td>
    	        <td>owerh</td>
    	        <td>张黎明</td>
    	        <td>13625684568</td>
    	        <td>zhangliming@197232832.qq</td>
    	        <td>2014-05-22 </td>
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox2" id="checkbox2"></td>
    	        <td>otewr2wer</td>
    	        <td>宋晓云</td>
    	        <td>13025486584</td>
    	        <td>sxy@163.com</td>
    	        <td>2014-05-22 </td>
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox3" id="checkbox3"></td>
    	        <td>otewr2wer</td>
    	        <td>宋晓云</td>
    	        <td>13025486584</td>
    	        <td>sxy@163.com</td>
    	        <td>2014-05-22 </td>
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox4" id="checkbox4"></td>
    	        <td>otewr2wer</td>
    	        <td>宋晓云</td>
    	        <td>13025486584</td>
    	        <td>sxy@163.com</td>
    	        <td>2014-05-22 </td>
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox5" id="checkbox5"></td>
    	        <td>otewr2wer</td>
    	        <td>宋晓云</td>
    	        <td>13025486584</td>
    	        <td>sxy@163.com</td>
    	        <td>2014-05-22 </td>
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox6" id="checkbox6"></td>
    	        <td>otewr2wer</td>
    	        <td>宋晓云</td>
    	        <td>13025486584</td>
    	        <td>sxy@163.com</td>
    	        <td>2014-05-22 </td>
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox7" id="checkbox7"></td>
    	        <td>otewr2wer</td>
    	        <td>宋晓云</td>
    	        <td>13025486584</td>
    	        <td>sxy@163.com</td>
    	        <td>2014-05-22 </td>
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox8" id="checkbox8"></td>
    	        <td>otewr2wer</td>
    	        <td>宋晓云</td>
    	        <td>13025486584</td>
    	        <td>sxy@163.com</td>
    	        <td>2014-05-22 </td>
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox" id="checkbox15"></td>
    	        <td>otewr2wer</td>
    	        <td>宋晓云</td>
    	        <td>13025486584</td>
    	        <td>sxy@163.com</td>
    	        <td>2014-05-22 </td>
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox" id="checkbox14"></td>
    	        <td>otewr2wer</td>
    	        <td>宋晓云</td>
    	        <td>13025486584</td>
    	        <td>sxy@163.com</td>
    	        <td>2014-05-22 </td>
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox" id="checkbox13"></td>
    	        <td>otewr2wer</td>
    	        <td>宋晓云</td>
    	        <td>13025486584</td>
    	        <td>sxy@163.com</td>
    	        <td>2014-05-22 </td>
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox" id="checkbox12"></td>
    	        <td>otewr2wer</td>
    	        <td>宋晓云</td>
    	        <td>13025486584</td>
    	        <td>sxy@163.com</td>
    	        <td>2014-05-22 </td>
    	        <td><a href="#">修改</a><a href="#"></a> <a href="#">删除</a></td>
  	        </tr>
    	      <tr>
    	        <td><input type="checkbox" name="checkbox" id="checkbox11"></td>
    	        <td>otewr2wer</td>
    	        <td>宋晓云</td>
    	        <td>13025486584</td>
    	        <td>sxy@163.com</td>
    	        <td>2014-05-22 </td>
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
    	    <li><a href="#">3</a></li>
    	    <li><a href="#">4</a></li>
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