<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>你的梦里有我吗</title>
	<meta charset="utf-8">
	<meta name="viewport" content='width=device-width,initial-scale=1'><!--视口-->
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/style.css">
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/jquery.js"></script>
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header" style="border-radius:0px;">
		
		<div class="logo">
			<a href="/HelloWorld/helloworld-houtai/index.php/Home/Index/index.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/logo.png" style="margin:3px 0 0 30px;"></a>
		</div>
		
		<div class="search" style="margin:-40px 0 0 370px;">
			<input type="text" style="width:300px;height:30px;border:none;">
			<button type="submit" class="btn btn-sm">搜 索</button>
		</div>

		<div class="user" style="float:right; margin:-32px 30px 0 0;">
			<div class="btn-group">
			  	<a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/admin.html"><button type="button" class="btn btn-lg">
			  		<span class="glyphicon glyphicon-user"></span> 你的梦里有我吗
			  	</button></a>	  	
			   	<!--<a href="xiaoxi.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-envelope"></span>
			   	</button></a>-->
			   	<a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/shezhi.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-cog"></span>
			   	</button></a>
			   	<a href="/HelloWorld/helloworld-houtai/index.php/Home/Login/login.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-log-in"></span>
			   	</button></a>
			</div>
		</div>

	</div>

	<div class="content">

		<div class="touxiang" style="border:1px solid #dcdcdc;margin-top:20px;">
			<p style="text-align:center;margin-top:30px;"><img src="/HelloWorld/helloworld-houtai/Public/front/img/touxiang.png"></p>
			<p class="name">你的梦里有我吗</p>
			<p class="title"><img src="/HelloWorld/helloworld-houtai/Public/front/img/title.png">工程师</p>
			<br/>
		</div>

		<nav class="navbar adnav" role="navigation" style="width:20%;margin:20px 0 0 0;border:1px solid #dcdcdc;">
				<ul class="nav navbar-nav" style="margin:3px 0 0 20px;">
					<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/guanzhu.html"><p>&nbsp;28</p><p style="margin-top:-8px;">关注</p></a></li>
					<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
					<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/fensi.html"><p>&nbsp;28</p><p style="margin-top:-8px;">粉丝</p></a></li>
					<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
					<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/admin.html"><p>&nbsp;28</p><p style="margin-top:-8px;">帖子</p></a></li>				
				</ul>
		</nav>

		<div class="guanzhu">
			
			<div class="1fs">
				<div class="fs">
					<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png"></a>
					<img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png">
					<p class="f-name">软件学院学生会</p>
					<button type="button" class="btn btn-sm fsgz" onclick="myFunction()">
		    			<span class="glyphicon glyphicon-plus "> 关注</span>
		    		</button>
		    		<br/>
		    		<br/>
				</div>

				<div class="fs fs2">
					<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png"></a>
					<img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png">
					<p class="f-name">软件学院学生会</p>
					<button type="button" class="btn btn-sm fsgz" onclick="myFunction()">
		    			<span class="glyphicon glyphicon-plus"> 关注</span>
		    		</button>
		    		<br/>
		    		<br/>
				</div>

				<div class="fs fs3">
					<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png"></a>
					<img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png">
					<p class="f-name">软件学院学生会</p>
					<button type="button" class="btn btn-sm fsgz" onclick="myFunction()">
		    			<span class="glyphicon glyphicon-plus"> 关注</span>
		    		</button>
		    		<br/>
		    		<br/>
				</div>

			</div>

			<div class="2fs">
				<div class="fs">
					<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png"></a>
					<img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png">
					<p class="f-name">软件学院学生会</p>
					<button type="button" class="btn btn-sm fsgz" >
		    			<span class="glyphicon glyphicon-plus " onclick="myFunction()"> 关注</span>
		    		</button>
		    		<br/>
		    		<br/>
				</div>

				<div class="fs fs2">
					<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png"></a>
					<img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png">
					<p class="f-name">软件学院学生会</p>
					<button type="button" class="btn btn-sm fsgz" onclick="myFunction()">
		    			<span class="glyphicon glyphicon-plus"> 关注</span>
		    		</button>
		    		<br/>
		    		<br/>
				</div>

				<div class="fs fs3">
					<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png"></a>
					<img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png">
					<p class="f-name">软件学院学生会</p>
					<button type="button" class="btn btn-sm fsgz" onclick="myFunction()">
		    			<span class="glyphicon glyphicon-plus"> 关注</span>
		    		</button>
		    		<br/>
		    		<br/>
				</div>

			</div>
			<br/>

		</div>

	</div>
	
	<br/>	
	<div class="footer" style="margin-top:300px;">
		<br/>
		<br/>
		<p>地址：石家庄市裕华区南二环东路20号</p>
	</div>

	<script type="text/javascript">
		/*关注按钮*/
		function myFunction(){
			var x;
			var r=confirm("已关注！");
			if (r==true){
				//添加到后台
			}
		}
		
	</script>
	
</body>
</html>