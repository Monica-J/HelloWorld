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
    	    <li><a href="#">管理员管理</a></li>
    	    <li class="active">管理员管理列表</li>
  	    </ol>
    	  <div class="table-responsive ">
    	    <h3>系统管理列表 <small>Administrator List</small></h3>
    	    <table width="100%" border="0" cellspacing="0" cellpadding="0"  class="table  table-striped table-hover ">
    	      <tr>
    	       <!--  <th width="4%"><input type="checkbox" name="checkbox10" id="checkbox10"></th> -->
    	        <th width="10%">id</th>
    	        <th width="10%">姓名</th>
    	        <th width="10%">密码</th>
    	        <th width="21%">邮箱</th>
    	        <th width="11%">注册时间</th>
    	        <th width="17%">操作</th>
  	        </tr>
             <?php if(is_array($admin)): $i = 0; $__LIST__ = $admin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ad): $mod = ($i % 2 );++$i;?><tr>
    	       <!--  <td><input type="checkbox" name="checkbox" id="checkbox">
    	          <label for="checkbox"></label></td>
 -->

    	        <td><?php echo ($ad["id"]); ?></td>
    	        <td><?php echo ($ad["name"]); ?></td>
    	        <td><?php echo ($ad["password"]); ?></td>
    	        <td><?php echo ($ad["email"]); ?></td>
    	        <td><?php echo ($ad["addtime"]); ?> </td>
    	        <td>
                                <a class="link-update" href="/HelloWorld/helloworld-houtai/index.php/Admin/User/admin_edit/id/<?php echo ($ad["id"]); ?>">修改</a>
                                
                                <a class="link-del" href="/HelloWorld/helloworld-houtai/index.php/Admin/User/admindel/id/<?php echo ($ad["id"]); ?>">删除</a>
             </td>
             </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    	     
  	      </table>
  	    </div>
    	 
    	  <div class="list-page"> <?php echo ($page); ?></div>

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