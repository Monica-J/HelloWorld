<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<title>院友录</title>
	<meta charset="utf-8">
	<meta name="viewport" content='width=device-width,initial-scale=1'><!--视口-->
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/style.css">
	
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/jquery.js"></script>
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/bootstrap.min.js"></script>
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/layer.js"></script>
<style>
	th,td{
		width:200px;
		height:80px;
		border:1px solid #eee;
		text-align:center;
		};
</style>	
		
</head>
<body>
	<div class="header">
		
		<div class="logo" style="margin:0 0 0 30px;">
			<a href="/HelloWorld/helloworld-houtai/index.php/Home/Index/index.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/logo.png"></a>
		</div>
		
		<div class="search" style="margin:-40px 0 0 370px;">
			<input type="text" >
			<button type="submit" class="btn btn-sm" style="margin-top:-2px;background:#fff;color:#ffA500;">搜 索</button>
		</div>

		<div class="user" style="float:right; margin:-30px 30px 0 0;">
			<div class="btn-group">
			  	<!-- <button type="button" class="btn btn-lg">
			  		<span class="glyphicon glyphicon-user"></span> 你的梦里有我吗
			  	</button>			  	
			   	<button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-envelope"></span>
			   	</button>
			   	<button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-cog"></span>
			   	</button>
			   	<button type="button" class="btn btn-lg" id="write">
			   		<span class="glyphicon glyphicon-pencil"></span>
			   	</button> -->
			   	<a href="/HelloWorld/helloworld-houtai/index.php/Home/Mine/admin.html"><button type="button" class="btn btn-lg">
			  		<span class="glyphicon glyphicon-user"></span> 你的梦里有我吗
			  	</button></a>	  	
			   	<!--<a href="xiaoxi.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-envelope"></span>
			   	</button></a>-->
			   	<a href="shezhi.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-cog"></span>
			   	</button></a>
			   <a href="#"><button type="button" class="btn btn-lg" id="write">
			   		<span class="glyphicon glyphicon-pencil"></span>
			   	</button></a>
			</div>
		</div>

	</div>

	<div class="content">
		
		<nav class="navbar navbar-default" role="navigation">
			<ul class="nav navbar-nav">
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Index/index.html">首页</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/wdsc.html">我的收藏</a></li>
				<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/rmht.html">热门话题</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/ggtz.html">公告通知</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/xshd.html">学生活动</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/jsjl.html">技术交流</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/files_share.html">资料共享</a></li>
				<li><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/sdtc.html">树洞吐槽</a></li>
				<li class="active"><a href="/HelloWorld/helloworld-houtai/index.php/Home/Fun/contacts.html">院友录</a></li>
			</ul>
		</nav>

		<div class="right">

			<div class="admin">
				<a href="admin.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/index-user.png" style="margin:15px 0 0 42px;width:90;height:87;"></a>
				<p class="name">你的梦里有我吗</p>
				<p class="title"><img src="/HelloWorld/helloworld-houtai/Public/front/img/title.png">工程师</p>
				
				<nav class="navbar adnav" role="navigation">
					<ul class="nav navbar-nav">
						<li><a href="#"><p>&nbsp;28</p><p style="margin-top:-8px;">关注</p></a></li>
						<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
						<li><a href="#"><p>&nbsp;28</p><p style="margin-top:-8px;">粉丝</p></a></li>
						<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
						<li><a href="#"><p>&nbsp;28</p><p style="margin-top:-8px;">帖子&nbsp;&nbsp;</p></a></li>				
					</ul>
				</nav>
			</div>

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
				
			<div class="Main">
				<div id="opwri" style="display:none;">     
				    <div class="Input_Box">     
				        <form>
					        <textarea id="httext"></textarea>	     
					        <div class="Input_Foot">
						        <button type="button" class="btn btn-m" id="huati">
									<img src="/HelloWorld/helloworld-houtai/Public/front/img/huati.png">插入话题	
								</button>
						        <input type="submit" class="submit" value="确认"> 
						    </div>
					    </form>
				    </div>   
			    </div>

				<div class="contact-chart" >
					
					<table class="chart">
						<tr>
							<th></th>
							<th>姓名</th>
							<th>毕业年份</th>
							<th>工作单位</th>
							<th>联系方式</th>
						</tr>
						<tr>
							<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png"></td>
							<td>李婧</td>
							<td>2018届毕业生</td>
							<td>xx公司产品经理</td>
							<td>15632188568</td>
						</tr>
						<tr>
							<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png"></td>
							<td>李婧</td>
							<td>2018届毕业生</td>
							<td>xx公司产品经理</td>
							<td>15632188568</td>
						</tr>
						<tr>
							<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png"></td>
							<td>李婧</td>
							<td>2018届毕业生</td>
							<td>xx公司产品经理</td>
							<td>15632188568</td>
						</tr>
						<tr>
							<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png"></td>
							<td>李婧</td>
							<td>2018届毕业生</td>
							<td>xx公司产品经理</td>
							<td>15632188568</td>
						</tr>
						<tr>
							<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png"></td>
							<td>李婧</td>
							<td>2018届毕业生</td>
							<td>xx公司产品经理</td>
							<td>15632188568</td>
						</tr>
						<tr>
							<td><img src="/HelloWorld/helloworld-houtai/Public/front/img/user-lit.png"></td>
							<td>李婧</td>
							<td>2018届毕业生</td>
							<td>xx公司产品经理</td>
							<td>15632188568</td>
						</tr>
					</table>
					
				</div>
		    </div>

		    
		    	
		</div>

	</div>

	<br/>	
	<footer class="footer">
		<br/>
		<br/>
		<p>地址：石家庄市裕华区南二环东路20号</p>
	</footer>

	<script>

	jQuery('#write').on('click', function(){
		layer.open({
		    type: 1,
		 	area: ['800px', '360px'],
		 	anim:1,
		 	shadeClose: true, //点击遮罩关闭
		 	content: jQuery('#opwri')
		});
	});

	/*插入话题*/
	var oButton = document.getElementById("huati"), oTextarea = document.getElementById("httext");
	var TOPIC = "插入话题";
	var funGetSelected = function(element) {
		    if (!window.getSelection) { 
		        //IE浏览器
		        return document.selection.createRange().text;
		    } 
		    else {
		        return element.value.substr(element.selectionStart, element.selectionEnd - element.selectionStart);
		    }
		}, 
		funInsertTopic = function(textObj) {
		    var topic = "#" + TOPIC + "#", value = textObj.value, index = value.indexOf(topic);
		    if (index === -1) {
		        //匹配
		        funTextAsTopic(textObj, topic);
			} 
		    value = textObj.value;
		    index = value.indexOf(topic);
		    if (textObj.createTextRange) {
		        var range = textObj.createTextRange();
		        range.moveEnd("character", -1 * value.length)           
		        range.moveEnd("character", index + 5);
		        range.moveStart("character", index + 1);
		        range.select();    
		    } 
		    else {
		        textObj.setSelectionRange(index + 1, index + 5);
		        textObj.focus();
		    }
		}, 
		funTextAsTopic = function(textObj, textFeildValue) {
		    textObj.focus();
		    if (textObj.createTextRange) {
		        var caretPos = document.selection.createRange().duplicate();
		        document.selection.empty();
		        caretPos.text = textFeildValue;
		    } else if (textObj.setSelectionRange) {
		        var rangeStart = textObj.selectionStart;
		        var rangeEnd = textObj.selectionEnd;
		        var tempStr1 = textObj.value.substring(0, rangeStart);
		        var tempStr2 = textObj.value.substring(rangeEnd);
		        textObj.value = tempStr1 + textFeildValue + tempStr2;
		        textObj.blur();
		    }
		};
	oButton.onclick = function() {
	    var textSelection = funGetSelected(oTextarea);
	    if (!textSelection || textSelection === TOPIC) {
	        //没有文字选中，光标处插入
	        funInsertTopic(oTextarea);    
	    } else {
	        funTextAsTopic(oTextarea, "#" + textSelection + "#");
	    }
	};
	</script>
	
</body>
</html>