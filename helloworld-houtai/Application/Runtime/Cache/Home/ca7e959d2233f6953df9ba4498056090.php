<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>你的梦里有我吗</title>
	<meta charset="utf-8">
	<meta name="viewport" content='width=device-width,initial-scale=1'><!--视口-->
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="/HelloWorld/helloworld-houtai/Public/front/css/style.css">
	<link rel="stylesheet" href="/HelloWorld/helloworld-houtai/Public/front/css/myemojiPl.css"><!--表情-->
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/jquery.js"></script>
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/bootstrap.min.js"></script>
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/myemojiPl.js"></script> 
	<script src="/HelloWorld/helloworld-houtai/Public/front/js/layer.js"></script>
</head>
<body>
	<div class="header">
		
		<div class="logo" style="margin:0 0 0 30px;">
			<a href="index.html"><img src="/HelloWorld/helloworld-houtai/Public/front/img/logo.png"></a>
		</div>
		
		<div class="search" style="margin:-40px 0 0 370px;">
			<input type="text" >
			<button type="submit" class="btn btn-sm" style="margin-top:-2px;background:#fff;color:#ffA500;">搜 索</button>
		</div>

		<div class="user" style="float:right; margin:-30px 30px 0 0;">
			<div class="btn-group">
			  	<a href="admin.html"><button type="button" class="btn btn-lg">
			  		<span class="glyphicon glyphicon-user"></span> 你的梦里有我吗
			  	</button></a>	  	
			   	<!--<a href="xiaoxi.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-envelope"></span>
			   	</button></a>-->
			   	<a href="shezhi.html"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-cog"></span>
			   	</button></a>
			   	<a href="#" id="write"><button type="button" class="btn btn-lg">
			   		<span class="glyphicon glyphicon-pencil"></span>
			   	</button></a>
			</div>
		</div>

	</div>

	<div class="content">
		
		<div class="Main" id="opwri" style="display:none;">     
			<div class="Input_Box">     
				   <div contenteditable="true" class="Input_text"></div>		     
				   <div class="Input_Foot">
					     <a class="imgBtn" href="javascript:void(0);">'◡'</a><a class="postBtn">确定</a> 
			</div>
			</div>
			<div class="faceDiv">
				   <section class="emoji_container"></section>
				   <section class="emoji_tab"></section>
			</div>    
		</div>

		<div class="touxiang" style="border:1px solid #dcdcdc;margin-top:20px;">
			<p style="text-align:center;margin-top:30px;"><img src="/HelloWorld/helloworld-houtai/Public/front/img/touxiang.png"></p>
			<p class="name">你的梦里有我吗</p>
			<p class="title"><img src="/HelloWorld/helloworld-houtai/Public/front/img/title.png">工程师</p>
			<br/>
		</div>

		<nav class="navbar adnav" role="navigation" style="width:20%;margin:20px 0 0 0;border:1px solid #dcdcdc;">
				<ul class="nav navbar-nav" style="margin-left:13px;">
					<li><a href="guanzhu.html"><p>&nbsp;28</p><p style="margin-top:-8px;">关注</p></a></li>
					<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
					<li><a href="fensi.html"><p>&nbsp;28</p><p style="margin-top:-8px;">粉丝</p></a></li>
					<li><img src="/HelloWorld/helloworld-houtai/Public/front/img/line.png"></li>
					<li><a href="admin.html"><p>&nbsp;28</p><p style="margin-top:-8px;">帖子</p></a></li>				
				</ul>
		</nav>

		<div class="zhuye">
			
			<div class="page" style="float:right;margin-top:-50px;">
		    			<div class="cont">
		    				<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/ltouxiang.png" style="margin:10px 0 0 10px;"></a>
		    				<p class="username" style="margin:-50px 0 0 80px; font-size:15px;">你的梦里有我吗</p>
		    				<p class="time" style="margin:5px 0 0 80px; font-size:14px;">8:00</p>
		    				<p style="margin:10px 10px 0 50px; font-size:15px;">如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦</p>
		    			</div>
		    			<img src="/HelloWorld/helloworld-houtai/Public/front/img/longline.png" style="margin-left:6px;">
		    			<div class="bt">
		    				<button type="button" class="btn btn-md" style="margin-left:10px;">
						   		<span>阅读 80</span>
						   	</button>
						   	<button type="button" class="btn btn-m" style="margin-left:140px;">
						   		<span class="glyphicon glyphicon-share">转发</span>
						   	</button>
						   	<button type="button" class="btn btn-md" style="margin-left:140px;">
						   		<span class="glyphicon glyphicon-pencil">评论</span>
						   	</button>
						   	<button type="button" class="btn btn-md" style="float:right;margin-right:10px;">
						   		<span class="glyphicon glyphicon-thumbs-up">点赞</span>
						   	</button>
		    			</div>
		    			
		    </div>

		    <div class="page" style="float:right;">
		    			<div class="cont">
		    				<a href=""><img src="/HelloWorld/helloworld-houtai/Public/front/img/ltouxiang.png" style="margin:10px 0 0 10px;"></a>
		    				<p class="username" style="margin:-50px 0 0 80px; font-size:15px;">你的梦里有我吗</p>
		    				<p class="time" style="margin:5px 0 0 80px; font-size:14px;">8:00</p>
		    				<p style="margin:10px 10px 0 50px; font-size:15px;">如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦如果你无法简洁的表达你的想法，那只说明你还不够了解它。-- 阿尔伯特·爱因斯坦</p>
		    			</div>
		    			<img src="/HelloWorld/helloworld-houtai/Public/front/img/longline.png" style="margin-left:6px;">
		    			<div class="bt">
		    				<button type="button" class="btn btn-md" style="margin-left:10px;">
						   		<span>阅读 80</span>
						   	</button>
						   	<button type="button" class="btn btn-m" style="margin-left:140px;">
						   		<span class="glyphicon glyphicon-share">转发</span>
						   	</button>
						   	<button type="button" class="btn btn-md" style="margin-left:140px;">
						   		<span class="glyphicon glyphicon-pencil">评论</span>
						   	</button>
						   	<button type="button" class="btn btn-md" style="float:right;margin-right:10px;">
						   		<span class="glyphicon glyphicon-thumbs-up">点赞</span>
						   	</button>
		    			</div>
		    			
		    </div>

		</div>
	</div>
	
	<br/>	
	<footer class="footer" style="margin-top:500px;">
		<br/>
		<br/>
		<p>地址：石家庄市裕华区南二环东路20号</p>
	</footer>

	<script>
		var emojiconfig = {
		    tieba: {
		        name: "表情",
		        path: "img/tieba/",
		        maxNum: 50,
		        file: ".jpg",
		        placeholder: ":{alias}:",
		        alias: {
		            1: "hehe",
		            2: "haha",
		            3: "tushe",
		            4: "a",
		            5: "ku",
		            6: "lu",
		            7: "kaixin",
		            8: "han",
		            9: "lei",
		            10: "heixian",
		            11: "bishi",
		            12: "bugaoxing",
		            13: "zhenbang",
		            14: "qian",
		            15: "yiwen",
		            16: "yinxian",
		            17: "tu",
		            18: "yi",
		            19: "weiqu",
		            20: "huaxin",
		            21: "hu",
		            22: "xiaonian",
		            23: "neng",
		            24: "taikaixin",
		            25: "huaji",
		            26: "mianqiang",
		            27: "kuanghan",
		            28: "guai",
		            29: "shuijiao",
		            30: "jinku",
		            31: "shengqi",
		            32: "jinya",
		            33: "pen",
		            34: "aixin",
		            35: "xinsui",
		            36: "meigui",
		            37: "liwu",
		            38: "caihong",
		            39: "xxyl",
		            40: "taiyang",
		            41: "qianbi",
		            42: "dnegpao",
		            43: "chabei",
		            44: "dangao",
		            45: "yinyue",
		            46: "haha2",
		            47: "shenli",
		            48: "damuzhi",
		            49: "ruo",
		            50: "OK"
		        },
		        title: {
		            1: "呵呵",
		            2: "哈哈",
		            3: "吐舌",
		            4: "啊",
		            5: "酷",
		            6: "怒",
		            7: "开心",
		            8: "汗",
		            9: "泪",
		            10: "黑线",
		            11: "鄙视",
		            12: "不高兴",
		            13: "真棒",
		            14: "钱",
		            15: "疑问",
		            16: "阴脸",
		            17: "吐",
		            18: "咦",
		            19: "委屈",
		            20: "花心",
		            21: "呼~",
		            22: "笑脸",
		            23: "冷",
		            24: "太开心",
		            25: "滑稽",
		            26: "勉强",
		            27: "狂汗",
		            28: "乖",
		            29: "睡觉",
		            30: "惊哭",
		            31: "生气",
		            32: "惊讶",
		            33: "喷",
		            34: "爱心",
		            35: "心碎",
		            36: "玫瑰",
		            37: "礼物",
		            38: "彩虹",
		            39: "星星月亮",
		            40: "太阳",
		            41: "钱币",
		            42: "灯泡",
		            43: "茶杯",
		            44: "蛋糕",
		            45: "音乐",
		            46: "haha",
		            47: "胜利",
		            48: "大拇指",
		            49: "弱",
		            50: "OK"
		        }
		      },
		    AcFun:{
		    	name : "AcFun表情",
		    	path : "img/AcFun/",
		    	maxNum : 54,
		    	file : ".png"
		    }
		  };
		jQuery('.Main').myEmoji({emojiconfig : emojiconfig});

		jQuery('#write').on('click', function(){
			layer.open({
			    type: 1,
			 	area: ['800px', '360px'],
			 	anim:1,
			 	shadeClose: true, //点击遮罩关闭
			 	content: jQuery('#opwri')
			});
		});
	</script>
</body>
</html>