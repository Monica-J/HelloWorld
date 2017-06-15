<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>公告通知</title>
	<meta charset="utf-8">
	<meta name="viewport" content='width=device-width,initial-scale=1'><!--视口-->
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/style.css">
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/share.css">
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/jquery.js"></script>
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/HelloWorld/helloworld-houtai/Public/front/js/jqPaginator.js"></script>
		
</head>
<body>
		<div class="header" style="border-radius:0px;">
		
		<div class="logo">
			<a href="/HelloWorld/helloworld-houtai/index.php/Home/Index/index.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/logo.png" style="margin:3px 0 0 30px;"></a>
		</div>
		
		<div class="search" style="margin:-40px 0 0 370px;">
			<input type="text" style="width:300px;height:30px;border:none;">
			<button type="submit" class="btn btn-sm ss">搜 索</button>
		</div>
          <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><div class="user" style="float:right; margin:-32px 30px 0 0;">
			<div class="btn-group">
			  	<a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/admin.html"><button type="button" class="btn btn-lg">
			  		<span class="glyphicon glyphicon-user"></span> <?php echo ($u["name"]); ?>
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
		</div><?php endforeach; endif; else: echo "" ;endif; ?>

	</div>

	<div class="content">
		
		<nav class="navbar navbar-default" role="navigation">
			<ul class="nav navbar-nav">
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Index/index.html">首页</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/rmht.html">热门话题</a></li>
				<li class="active"><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/ggtz.html">公告通知</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/xshd.html">学生活动</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/jsjl.html">技术交流</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/files_share.html">资料共享</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/sdtc.html">树洞吐槽</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/contacts.html">院友录</a></li>
			</ul>
		</nav>

		<div class="right">
            <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$u): $mod = ($i % 2 );++$i;?><div class="admin">
				<a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/admin.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/index-user.png" style="margin:15px 0 0 46px;width:90;height:87;"></a>
				<p class="name"><?php echo ($u["name"]); ?></p>
				<p class="title"><img src="/HelloWorld/helloworld-houtai/Public/front/img/title.png"><?php echo ($u["introduce"]); ?></p>
				
				<nav class="navbar adnav" role="navigation">
					<ul class="nav navbar-nav">
						<li><a href="#"><p>&nbsp;<?php echo ($u["guanzhu"]); ?></p><p style="margin-top:-8px;">关注</p></a></li>
						<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
						<li><a href="#"><p>&nbsp;<?php echo ($u["fans"]); ?></p><p style="margin-top:-8px;">粉丝</p></a></li>
						<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
						<li><a href="#"><p>&nbsp;<?php echo ($u["tiezi"]); ?></p><p style="margin-top:-8px;">帖子&nbsp;&nbsp;</p></a></li>				
					</ul>
				</nav>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			<div class="book">
				<p class="bktitle">推荐书单</p>
				<div id="myCarousel" class="carousel slide">
					<!-- 轮播（Carousel）指标 -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>   
					<!-- 轮播（Carousel）项目 -->
					<div class="carousel-inner" style="border-top:1px solid #dcdcdc;">
						<div class="item active">
							<img src="/HelloWorld/helloworld-houtai/Public/front/img/HTML5.jpg" alt="First slide">
						</div>
						<div class="item">
							<img src="/HelloWorld/helloworld-houtai/Public/front/img/HTML5.jpg" alt="Second slide">
						</div>
						<div class="item">
							<img src="/HelloWorld/helloworld-houtai/Public/front/img/HTML5.jpg" alt="Third slide">
						</div>
						<br/>
					</div>
				</div>  
			</div>
			
		</div>

		<div class="left">			

		   <div class="tiezi">
		   <?php if(is_array($dynamic)): $i = 0; $__LIST__ = $dynamic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$d): $mod = ($i % 2 );++$i;?><div class="page">
		    			<div class="cont">
		    				<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png" style="margin:10px 0 0 10px;"></a>
		    				<p class="username" style="margin:-50px 0 0 80px; font-size:15px;"><?php echo ($d["name"]); ?></p>
		    				<p class="time" style="margin:5px 0 0 80px; font-size:14px;"><?php echo ($d["addtime"]); ?></p>
		    				<button type="button" class="btn btn-sm gz" style="float:right; margin:-45px 10px 0 0;" onclick="myFunction()">
		    					<span class="glyphicon glyphicon-plus"> 关注</span>
		    				</button>
		    				<div class="co">
                               <p><?php echo ($d["content"]); ?></p>
							</div>
		    			</div>
		    			<img src="/HelloWorld/helloworld-houtai/Public/front/img/longline.png" style="margin-left:6px;">
		    			<div class="bt">
		    				<button type="button" class="btn btn-md" style="margin-left:10px;">
						   		<span class="glyphicon glyphicon-heart">收藏</span>
						   	</button>
						   	<a href="javascript:void(0)" class="share"><button type="button" class="btn btn-m " style="margin-left:240px;">
						   		<span class="glyphicon glyphicon-share">分享</span>
						   	</button></a>
						   	<button type="button" class="btn btn-md" style="float:right;margin-right:10px;" onclick="myZan()">
						   		<span class="glyphicon glyphicon-thumbs-up">点赞</span>
						   	</button>
		    			</div>
		    			
		    		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		    </div>

		  <!--   <div style="margin-left:52px;"> -->
		    	<!--<p id="p1"></p>--><!--返回的页码值-->
			   <!--  <ul class="pagination pagination1"></ul>
		    </div> -->
		    	
		</div>

	</div>

	<br/>	
	<div class="footer">
		<br/>
		<br/>
		<p>地址：石家庄市裕华区南二环东路20号</p>
	</div>

	<script>

		/*关注按钮*/
		function myFunction(){
			var x;
			var r=confirm("已关注！");
			if (r==true){
				//添加到后台
			}
		}

		function myZan(){
			var y;
			var s=confirm("已赞！");
			if (s==true){
				//添加到后台
			}
		}

		/*分页*/
	    jQuery.jqPaginator('.pagination1', {
	        totalPages: 100,
	        visiblePages: 10,
	        currentPage: 3,
	        onPageChange: function (num, type) {
	            jQuery('#p1').text(type + '：' + num);
	        }
	    });

	</script>
	<script type="text/javascript" src="/HelloWorld/helloworld-houtai/Public/front/js/share.js"></script>
	<script  type="text/javascript">
		jQuery('.share').shareConfig({
			Shade : true, //是否显示遮罩层
			Event:'click', //触发事件
			Content : 'Share', //内容DIV ID
			Title : '我爱分享' //显示标题
		});
	</script>
	
</body>
</html>