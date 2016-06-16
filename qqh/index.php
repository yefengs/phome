<!DOCTYPE html>
<!-- 
	Lovingly made by 青报新媒
	Copyright <?php echo date('Y')?> 青报新媒体传播中心 2016-06
	Last update <?php echo date('Y/m/d H:i:s'); ?>

 -->
<html>
<head>
	<meta charset="utf-8">
	<title>2016年青洽会暨环青海湖电动车 青海羚网专题报道_青海羚网</title>
	<meta name="Keywords" content="青洽会,环湖电动车赛,CEVR,2016年青洽会,青海羚网专题" />
	<meta name="description" content="2016年“青洽会”暨第三届环湖电动车赛，青海羚网特别报道。" />
	<meta name="author" content="yefengs 2016-06-19 10:34"/>
	<meta name="renderer" content="webkit">
	<meta name="referrer" content="always">
	<meta name="apple-mobile-web-app-title" content="青海羚网">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" type="text/css" href="[!--news.url--]style/2016/qqh/style.css">
	<script type="text/javascript" src="[!--news.url--]style/2016/qqh/js/jquery.min.js"></script>
	<script type="text/javascript" src="[!--news.url--]style/2016/qqh/js/normal.js"></script>
<!--[if lt IE 9]> 
	<script type="text/javascript" src="http://www.qhlingwang.cn/style/js/html5.js"></script>
<![endif]-->
</head>
<body>
<section id="top-menu"> 
	<nav class="w1024 top-nav-list">
		<ul>
			<li>
				<a href="http://www.qhlingwang.cn">首页</a>
			</li>
			<li>
				<a href="http://www.qhlingwang.cn/xinwen/">新闻</a>
			</li>
			<li>
				<a href="http://www.qhlingwang.cn/shehui/">社会</a>
			</li>
			<li>
				<a href="http://www.qhlingwang.cn/lvyou/">旅游</a>
			</li>
			<li>
				<a href="http://safe.qhlingwang.cn/">网络安全</a>
			</li>
			<li>
				<a href="http://epaper.tibet3.com/">青海日报数字版</a>
			</li>

		</ul>
	</nav>
</section>
<header id="header">
	<section id="top-banner" role="banner">
		<h1>2016年青洽会 青海羚网专题报道</h1>
	</section>
	<nav id="main-nav">
	<i class="nav-style"></i>
	<i class="nav-style nav-style-right"></i>
		<ul>
			<li>
				<a href="#box1">青洽会要闻</a>
			</li>
			<li>
				<a href="#video-qqh">视频播报</a>
			</li>
			<li>
				<a href="#mjxz">美景寻踪</a>
			</li>
			<li>
				<a href="#">环湖电动车赛</a>
			</li>
		</ul>
	</nav>
	<div id="scroll-news"> 
		<div id="scrollbox">
		  <div class="indemo">
			<div id="demo1" class="scrolltext"> 
				[e:loop={'1,5,8,9,10,11,12,13,40,41,42,43',15,0,0}]
				<a href="<?=$bqsr[titleurl]?>" target="_blank" title="<?=$bqr[title]?>"><?=esub($bqr[title],52,'...')?><span> ( <?=date('H:m',$bqr[newstime])?> )</span></a>
				[/e:loop] 			
			</div>
		    <div id="demo2" class="scrolltext"></div>
		  </div>
		</div>
	</div>
<script type="text/javascript">
	var demo = document.getElementById("scrollbox"),demo1 = document.getElementById("demo1"),demo2 = document.getElementById("demo2");
	demo2.innerHTML = demo1.innerHTML;
	function Marquee() {
		if (demo.scrollLeft - demo2.offsetWidth >= 0) {
			demo.scrollLeft -= demo1.offsetWidth;
		} else {
			demo.scrollLeft++;
		}
	}
	var myvar = setInterval(Marquee, 30);
	demo.onmouseout = function() {
		myvar = setInterval(Marquee, 30);
	}
	demo.onmouseover = function() {
		clearInterval(myvar);
	}
</script>
</header>
<section class="w1024">
	<div id="toutiao" >
		<span class="toutiao-tip">青洽<br />头条</span>
	<!-- 头条 -->
		<?php $i=0; ?>
[e:loop={'1,5,8,9,10,11,12,13',1,0,0,'firsttitle = 1'}]
		<?php $i=$bqr[id]; ?>
<h2 class="toutiao-title"><a href="<?=$bqsr[titleurl]?>" title="<?=$bqr[title]?>"><?=esub($bqr[title],77,'')?></a></h2>
[/e:loop]

		<ul>
		[e:loop={'1,5,8,9,10,11,12,13',3,0,0,'firsttitle = 1 AND ID NOT IN('.$i.')'}]
			<li>[<a href="<?=$bqsr[titleurl]?>" target="_blank" title="<?=$bqr[title]?>"><?=esub($bqr[title],60,'...')?> </a>]</li>
		[/e:loop]
		</ul>
	</div>
</section>

<section class="w1024" id="box1">
	<!-- 360px  x  430px   -->
	<div class="big-news w440 f-left">
		<h3 class="big-title lhyw"><strong>青洽会要闻</strong></h3>
		<div class="list-style-0">
			<ul>
			[e:loop={'2,3',6,0,0,'','istop DESC,newstime DESC'}]
			<li><a href="<?=$bqsr[titleurl]?>" target="_blank" title="<?=$bqr[title]?>"><?=list_font($bqr[titlefont],$bqr[title])?></a></li>
			[/e:loop] 	
			</ul>
		</div>
	</div>

	<!-- 660px x 430px -->
	<div  class="big-pic-slider w550 f-right ">
		<div class="pic-slider">
			<div class="bd">
				<ul>
[e:loop={'1,5,8,9,10,11,12,13',8,0,1,'isgood = 1','istop DESC,newstime DESC'}]
		<li>
		<a href="<?=$bqsr[titleurl]?>" target="_blank" title="<?=$bqr[title]?>"><?=get_thumbnail($bqr[titlepic],550,366,$bqr[title]); ?></a>
		<h5 class="h5-slider-title"><a href="<?=$bqsr[titleurl]?>" target="_blank" title="<?=$bqr[title]?>"><?=$bqr[title]?></a></h5>
		</li>
[/e:loop]
				</ul>
			</div>
			<div class="hd"><ul></ul></div>
<!-- 			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a> -->
		</div>
	</div>
	<div class="clearfix"></div>
</section>



<section class="w1024" id="video-qqh">
		<div class="news-video w666 f-left">
		<h3 class="big-title spbb"><strong>视频播报</strong></h3>
			<ul class="clearfix">
		<?php $i=1; ?>
			[e:loop={'1,5,8,9,10,11,12,13,40,41,42,43，45',5,0,1,'video<>""'}]
			<?php if($i){ ?>
				<li class="frist-video">
					<a href="<?=$bqsr[titleurl]?>" title="<?=$bqr[title]?>">
						<?=get_thumbnail($bqr[titlepic],330,245,$bqr[title]); ?>
						<i></i>
					</a>
					<div class="video-descript">
						<a href="<?=$bqsr[titleurl]?>" title="<?=$bqr[title]?>"><?=$bqr[title]?></a>
					</div>
				</li>
				<?php $i= 0;} else { ?>
				<li >
					<a href="<?=$bqsr[titleurl]?>" title="<?=$bqr[title]?>"><?=get_thumbnail($bqr[titlepic],160,120,$bqr[title]); ?>
						<i></i>
					</a>
					<div class="video-descript">
						<a href="<?=$bqsr[titleurl]?>" title="<?=$bqr[title]?>"><?=$bqr[title]?></a>
					</div>
				</li>
				<?php } ?>
		[/e:loop]
			</ul>
		</div>
		<div class="w300 siderbar1 f-right siderbar-frist list-style-1 ">
			<h4 class="sidebartitle"><strong>历届回顾</strong></h4>
			<ul>
				<li><a href="http://www.qhlingwang.com/2015zl/qqh/index.htm" title="2015青洽会暨第二届环湖电动汽车挑战赛">2015青洽会暨第二届环湖电动汽车挑战赛</a></li>
				<li><a href="http://www.qhlingwang.com/zhuanlan/2014qqh/index.htm" title="2015青洽会暨首届环湖电动汽车挑战赛">2015青洽会暨首届环湖电动汽车挑战赛</a></li>
				<li><a href="http://www.qhlingwang.com/zhuanlan/2014qqh/content/2010-05/10/content_1556584.htm" title="2006年第七届青洽会">2006年第七届青洽会</a></li>
				<li><a href="http://www.qhlingwang.com/zhuanlan/2014qqh/content/2010-05/10/content_1556585.htm" title="2005年第七届青洽会">2005年第七届青洽会</a></li>
				<li><a href="http://www.qhlingwang.com/zhuanlan/2014qqh/content/2010-05/10/content_1556586.htm" title="2004年第五届青洽会">2004年第五届青洽会</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
</section>


<section class="w1024" id="news-cevr">
	<h3 class="big-title zxdt"><strong>最新动态</strong></h3>
	<div class="news-list list-style-0">
		<ul>
			<li><a href="#" title="####">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
			<li><a href="#" title="####">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
			<li><a href="#" title="####">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
			<li><a href="#" title="####">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
			<li><a href="#" title="####">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
			<li><a href="#" title="####">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>


			<li><a href="#" title="####">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
			<li><a href="#" title="####">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
			<li><a href="#" title="####">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
			<li><a href="#" title="####">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
			<li><a href="#" title="####">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
			<li><a href="#" title="####">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>


		</ul>
	</div>
</section>





<section class="w100b" id="mjxz">
	<div class="beautiful-qh"> 
	<h3 class="big-title mjxz"><strong>美景寻踪</strong></h3>
		<div class="pic">
			<ul>
				<li class="frist" style="background-image:url(images/demo1.jpg)">
						<a href="" class="click-point"></a>
						<div class="txt">
							<p class="p1">作者 ： 默默的墨墨</p>
							<p class="p2">我的个人拉萨之旅｜｜故事之城</p>
						</div>
				</li>
				<li class="l2" style="background-image:url(images/demo.jpg)">
						<a href="" class="click-point"></a>
						<div class="txt">
							<p class="p1">作者 ： 默默的墨墨</p>
							<p class="p2">我的个人拉萨之旅｜｜故事之城</p>
						</div>
				</li>
				<li class="l3" style="background-image:url(images/demo1.jpg)">
						<a href="" class="click-point"></a>
						<div class="txt">
							<p class="p1">作者 ： 默默的墨墨</p>
							<p class="p2">我的个人拉萨之旅｜｜故事之城</p>
						</div>
				</li>
				<li class="l4 last" style="background-image:url(images/demo.jpg)">
						<a href="" class="click-point"></a>       
						<div class="txt">
							<p class="p1">作者 ： 默默的墨墨</p>
							<p class="p2">我的个人拉萨之旅｜｜故事之城</p>
						</div>
				</li>
				<li class="l4 last" style="background-image:url(images/demo1.jpg)">
						<a href="" class="click-point"></a>        
						<div class="txt">
							<p class="p1">作者 ： 默默的墨墨</p>
							<p class="p2">我的个人拉萨之旅｜｜故事之城</p>
						</div>
				</li>
				<li class="l4 last" style="background-image:url(images/demo.jpg)">
						<a href="" class="click-point"></a>        
						<div class="txt">
							<p class="p1">作者 ： 默默的墨墨</p>
							<p class="p2">我的个人拉萨之旅｜｜故事之城</p>
						</div>
				</li>
			</ul>
		</div>
	</div>
</section>




















<section class="w1024" id="box2">
	<!-- 360px  x  430px   -->
	<div class="big-news w440 f-left">
		<h3 class="big-title lhyw"><strong>青洽会要闻</strong></h3>
		<div class="list-style-0">
			<ul>
				<li><a href="#" title="">这里asd是内容这里是内容这sdfsdf里asd是内容这里是内容sada</a></li>
				<li><a href="#" title="">这里是asd内容这里是内容这里是内容这里是内容</a></li>
				<li><a href="#" title="">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
				<li><a href="#" title="">这里是内容这asd里是内容这sdfsdf里是内容这里asdasd是内容</a></li>
				<li><a href="#" title="">这里是内容asd这里是内容这里sdfsd是内容这里是内容</a></li>
				<li><a href="#" title="">这里是内容这里是zxsc内sfs容这里是内容这里是内容</a></li>
			</ul>
		</div>
	</div>

	<!-- 660px x 430px -->
	<div class="w550 f-right big-pic-slider">
		<div class="pic-slider">
			<div class="bd">
				<ul>
					<li>
						<a href="#">
							<img src="images/demo.jpg" alt="" >
						</a>
						<h5 class="h5-slider-title">
							<a href="#" title="">这里是内容这里是内容这里是内容这里是内容</a>
						</h5>
					</li>
					<li>
						<a href="#">
							<img src="images/demo1.jpg" alt="" >
						</a>
						<h5 class="h5-slider-title">
							<a href="#" title="">这里是内容这里是内容这里是内容这里是内容</a>
						</h5>
					</li>
					<li>
						<a href="#">
							<img src="images/demo.jpg" alt="" >
						</a>
						<h5 class="h5-slider-title">
							<a href="#" title="">这里是内容这里是内容这里是内容这里是内容</a>
						</h5>
					</li>
					<li>
						<a href="#">
							<img src="images/demo1.jpg" alt="" >
						</a>
						<h5 class="h5-slider-title">
							<a href="#" title="">这里是内容这里是内容这里是内容这里是内容</a>
						</h5>
					</li>
				</ul>
			</div>
			<div class="hd">
						<ul></ul>
			</div>
 			<a class="prev" href="javascript:void(0)"></a>
			<a class="next" href="javascript:void(0)"></a> 
		</div>
	</div>
	<div class="clearfix"></div>
</section>








<section class="w1024">
	<!-- 即时报列表 -->
	<div class="w660 f-left">
	<h3 class="big-title spbb"><strong>视频播报</strong></h3>
		<div class="box-news-list clearfix">
			<div class="first-news f-left">
				<div class="list-entry-first">
					<div class="news-img-thum">
						<img src="images/demo1.jpg" alt="" >
					</div>
					<h2>这是标题标题标题</h2>
					<div class="sumary">
						<p>青海省是我国青藏高原上的重要省份之一，因境内有全国最大的内陆咸水湖—青海湖而得名。青海面积72.23万平方公里，东西长1200多公里，南北宽800多公里，辖6州、1地、1市、51个县级行政单位，与甘肃、四川、西藏、新疆接壤。青海东部素有“天河锁钥”、“海藏咽喉”、“金城屏障”、“西域之冲”和“玉塞咽喉”等称谓。</p>
						<div><a href="#">全文阅读</a></div>
					</div>
				</div>
			</div>
			<div class="last-news f-right">
				<ul class="">
					<li>
						<div class="last-news-img">
							<a href=""><img src="images/demo.jpg" alt="" ></a>
						</div>
						<div class="last-news-img-entry">
							<h3><a href="#">这是标题标题标题</a></h3>
							<div class="last-news-img-entry-meta">
								<time>2016-06-23</time>
							</div>
						</div>
					</li>
					<li>
						<div class="last-news-img">
							<a href=""><img src="images/demo1.jpg" alt="" ></a>
						</div>
						<div class="last-news-img-entry">
							<h3><a href="#">这是标题标题标题</a></h3>
							<div class="last-news-img-entry-meta">
								<time>2016-06-23</time>
							</div>
						</div>
					</li>
					<li>
						<div class="last-news-img">
							<a href=""><img src="images/demo.jpg" alt="" ></a>
						</div>
						<div class="last-news-img-entry">
							<h3><a href="#">这是标题标题标题这是标题标题标题是标题标题标题</a></h3>
							<div class="last-news-img-entry-meta">
								<time>2016-06-23</time>
							</div>
						</div>
					</li>
					<li>
						<div class="last-news-img">
							<a href=""><img src="images/demo1.jpg" alt="" ></a>
						</div>
						<div class="last-news-img-entry">
							<h3><a href="#">这是标题标题标题</a></h3>
							<div class="last-news-img-entry-meta">
								<time>2016-06-23</time>
							</div>
						</div>
					</li>
					<li>
						<div class="last-news-img">
							<a href=""><img src="images/demo.jpg" alt="" ></a>
						</div>
						<div class="last-news-img-entry">
							<h3><a href="#">这是标题标题标题</a></h3>
							<div class="last-news-img-entry-meta">
								<time>2016-06-23</time>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="news-video w666 f-left">
		<h3 class="big-title spbb"><strong>视频播报</strong></h3>
			<ul class="clearfix">
				<li class="frist-video">
					<a href="">
						<img src="images/demo.jpg" alt="title">
						<i></i>
					</a>
					<div class="video-descript">
						<a href="#">这是标题这是标题这是标题这是标题这是标题这是标题</a>
					</div>
				</li>
				<li >
					<a href="">
						<img src="images/demo1.jpg" alt="title">
						<i></i>
					</a>
					<div class="video-descript">
						<a href="#">这是标题</a>
					</div>
				</li>
				<li >
					<a href="">
						<img src="images/demo1.jpg" alt="title">
						<i></i>
					</a>
					<div class="video-descript">
						<a href="#">这是标题</a>
					</div>
				</li>
				<li >
					<a href="">
						<img src="images/demo1.jpg" alt="title">
						<i></i>
					</a>
					<div class="video-descript">
						<a href="#">这是标题这是标题这是标题这</a>
					</div>
				</li>
				<li >
					<a href="">
						<img src="images/demo1.jpg" alt="title">
						<i></i>
					</a>
					<div class="video-descript">
						<a href="#">这是标题</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="w350 f-right">
		<aside class="w300 siderbar1  list-style-1 ">
			<h4 class="sidebartitle"><strong>历届回顾</strong></h4>
			<ul>
				<li><a href="#" title="">这里asd是内容这里是内容这sdfsdf里asd是内容这里是内容sada</a></li>
				<li><a href="#" title="">这里是asd内容这里是内容这里是内容这里是内容</a></li>
				<li><a href="#" title="">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
				<li><a href="#" title="">这里是内容这asd里是内容这sdfsdf里是内容这里asdasd是内容</a></li>
				<li><a href="#" title="">这里是内容asd这里是内容这里sdfsd是内容这里是内容</a></li>
			</ul>
		</aside>
		<aside class="w300 siderbar1  list-style-1" style="margin-top:10px;">
			<h4 class="sidebartitle"><strong>历届回顾</strong></h4>
			<ul>
				<li><a href="#" title="">这里asd是内容这里是内容这sdfsdf里asd是内容这里是内容sada</a></li>
				<li><a href="#" title="">这里是asd内容这里是内容这里是内容这里是内容</a></li>
				<li><a href="#" title="">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
								<li><a href="#" title="">这里是内容这asd里是内容这sdfsdf里是内容这里asdasd是内容</a></li>
				<li><a href="#" title="">这里是内容这asd里是内容这sdfsdf里是内容这里asdasd是内容</a></li>
			</ul>
		</aside>
		<aside class="w300 siderbar1  list-style-1" style="margin-top:10px;">
			<h4 class="sidebartitle"><strong>历届回顾</strong></h4>
			<ul>
				<li><a href="#" title="">这里asd是内容这里是内容这sdfsdf里asd是内容这里是内容sada</a></li>
				<li><a href="#" title="">这里是asd内容这里是内容这里是内容这里是内容</a></li>
				<li><a href="#" title="">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
					<li><a href="#" title="">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
						<li><a href="#" title="">这里asd是内容这里asd是内sdfsd容这里是内容这asda里是内容</a></li>
								<li><a href="#" title="">这里是内容这asd里是内容这sdfsdf里是内容这里asdasd是内容</a></li>
				<li><a href="#" title="">这里是内容这asd里是内容这sdfsdf里是内容这里asdasd是内容</a></li>
			</ul>
		</aside>




	</div>
	<div class="clearfix"></div>
</section>



<section class="w100b">
	<div class="beautiful-qh"> 
	<h3 class="big-title mjxz"><strong>美景寻踪</strong></h3>
		<div class="pic">
			<ul>
				<li class="frist" style="background-image:url(images/demo1.jpg)">
						<a href="" class="click-point"></a>
						<div class="txt">
							<p class="p1">作者 ： 默默的墨墨</p>
							<p class="p2">我的个人拉萨之旅｜｜故事之城</p>
						</div>
				</li>
				<li class="l2" style="background-image:url(images/demo.jpg)">
						<a href="" class="click-point"></a>
						<div class="txt">
							<p class="p1">作者 ： 默默的墨墨</p>
							<p class="p2">我的个人拉萨之旅｜｜故事之城</p>
						</div>
				</li>
				<li class="l3" style="background-image:url(images/demo1.jpg)">
						<a href="" class="click-point"></a>
						<div class="txt">
							<p class="p1">作者 ： 默默的墨墨</p>
							<p class="p2">我的个人拉萨之旅｜｜故事之城</p>
						</div>
				</li>
				<li class="l4 last" style="background-image:url(images/demo.jpg)">
						<a href="" class="click-point"></a>       
						<div class="txt">
							<p class="p1">作者 ： 默默的墨墨</p>
							<p class="p2">我的个人拉萨之旅｜｜故事之城</p>
						</div>
				</li>
				<li class="l4 last" style="background-image:url(images/demo1.jpg)">
						<a href="" class="click-point"></a>        
						<div class="txt">
							<p class="p1">作者 ： 默默的墨墨</p>
							<p class="p2">我的个人拉萨之旅｜｜故事之城</p>
						</div>
				</li>
				<li class="l4 last" style="background-image:url(images/demo.jpg)">
						<a href="" class="click-point"></a>        
						<div class="txt">
							<p class="p1">作者 ： 默默的墨墨</p>
							<p class="p2">我的个人拉萨之旅｜｜故事之城</p>
						</div>
				</li>
			</ul>
		</div>
	</div>
</section>
<footer id="footer">
	<div class="footer-top">
		<div class="about w1024 clearfix">
			<div class="footer-item">
				<p>2016年“青洽会”暨第三届环湖电动车赛</p>
				<p>青海羚网特别报道</p>
				<p>青海日报社新媒体传播中心</p>
			</div>
			<div class="footer-item item-editor">
				<p>栏目编辑：王淑红、张晓宏、闻皓、李军、刘海钧</p>
				<p>设计:张得俊</p>
			</div>
			<div class="footer-item1"></div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="copyright w1200">Copyright 2016 青海羚网　　<span class="beian">青ICP备15000618号</span></div>
	</div>
</footer>
</div>
</body>
</html>