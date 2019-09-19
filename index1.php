<?php
	session_start();
	@$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>HOME</title>
	<link href="css/index.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- container -->
<div id="container">
  <!-- nav -->
	<div id="nav">
		<div id="nav-pic">
        	<div class="logo"></div>
        </div>
		<div id="nav-select">
        	<ul class="nav-ul">
                <li><a href="index1.php">HOME</a></li>
                <li><a href="blod.php">BLOD</a></li>
                <li><a href="GALLERY.php">GALLERY</a></li>
                <li><a href="shopping.php">SHOPPING</a></li>
                <li><a href="Message.php">MESSAGE</a></li>
			</ul>
        </div>
        <div id="button">
            <form action="index2.php" method="post" name="form">
                <tr>
                    <td><input type='button' value="登录" id="longin" name="longin"/></td>
                    <td><input type='button' value="注册" id="register" name="register"/></td>
                    <td><div id="retire"><a href="retire.php" style="text-decoration:none;color:#fff;">退出</a></div></td>
                </tr>
            </form>
        </div>
	</div>
  <!-- nav over-->
	<!-- header-pic -->
	<div id="header-pic">Save green</div>

	<!-- save-earth -->
	<div class="save-earth">
		<h1>LETS TOGATHER SAVE OUR EARTH</h1>
		<p>Lorem ipsum dolor sit amet, cum at inani interessetnisl omnium dolor amet amet qco modo cum text</p>
		<div class="info">
			<div class="info-one">
				<div class="info-img"><img src="images/hotbool.png" width="50" height="50"></div>
				<h2>安全的环境</h2>
				<p>人类就是花的根，环境是未绽的花苞，根努力就能开出美丽，反之只有枯竭、谢落。</p>
			</div>
			<div class="info-two">
				<div class="info-img"><img src="images/system.png" width="50" height="50"></div>
				<h2>生态系统</h2>
				<p>我们的生态系统非常脆弱，所以我们不仅要关心一种生物，而是要关心一切生物。</p>
			</div>
			<div class="info-three">
				<div class="info-img"><img src="images/cycle.png" width="50" height="50"></div>
				<h2>回收，再利用</h2>
				<p>我们有财富，你们有废品，我给你们财富，你给我们废品。</p>
			</div>
		</div>
	</div>
	<!-- save-earth over-->
    
	<!-- earth-live -->
	<div id="earth-live">
		<div class="live-left-img"></div>
		<div class="live-right">
			<p>没有其他星球可以居住..</p><br>
			<p class="two">通过捐赠帮助我们增加绿色。</p>
			<p class="three">Lorem ipsum dolor sit amet，eu qui modo expetendis reformidans ex set set appetere sententiae seo eum in simul homero。Duo consul lorem probatus no qu alterum坐在没有简单的假人。</p>
			<div id="imore">
				<div class="immediately">立即捐赠</div>
				<div class="more">查看更多</div>
			</div>
		
		</div>
	</div>
	<!-- earth-live over-->
    
	<!-- 广告 -->
	<div class="campaigns">
		<h1>RECENT CAMPAIGNS</h1>
		<p>Lorem ipsum dolor sit amet, cum at inani interes setnisl omnium dolor amet amet qco modo cum text</p>
		<div class="info">
			<div class="info-one">
				<div class="info-img">
					<div class="info-img1"></div>
				</div>
				<h2>Safe Environment</h2>
				<div class="money">Boston,Massachusetts. [$16,000 to go]</div>
				<div class="word">Lorem ipsum dolor sit amet, eu qui modo expeten dis reformidans, ex sit appetere sententiae..</div>
				<div class="more"><a href="GALLERY.php">查看更多</a></div>
			</div>

			<div class="info-two">
				<div class="info-img">
					<div class="info-img2"></div>
				</div>
				<h2>Solution For Pollution</h2>
				<div class="money">chicago, Illinois [$11,000 to go]</div>
				<div class="word">Lorem ipsum dolor sit amet, eu qui modo expeten dis reformidans, ex sit appetere sententiae..</div>
				<div class="more"><a href="GALLERY.php">查看更多</a></div>
			</div>

			<div class="info-three">
				<div class="info-img">
					<div class="info-img3"></div>
				</div>
				<h2>Forest Animal Save</h2>
				<div class="money">Michigan. [$9000 to go]</div>
				<div class="word">Lorem ipsum dolor sit amet, eu qui modo expeten dis reformidans, ex sit appetere sententiae..</div>
				<div class="more"><a href="GALLERY.php">查看更多</a></div>
			</div>
		</div>
	</div>
	<!-- 广告 over -->
    
	<!-- ECOLOGY -->
	<div id="ecology">
		<div class="ecology-left">
			<h2>WE ARE ECOLOGY & WE CARE YOU</h2>
			<p>Lorem ipsum dolor some link sit amet, cum at inani interesset</p>
			<div id="description">
			<!-- select title -->
				<ul id="eco-des">
					<li class="active">枯木逢春</li>
			        <li> 心境开阔</li>
			        <li>心旷神怡</li>
				</ul>
			<!-- description -->
				<div id="des">
					<div style="display:block;">
						我给你清新空气，你给我烟囱林立；我给你绿草葱翠，你给我垃圾遍地；我给你碧水蓝天，你给我熏天臭地；我给你健康家园，你给我黄沙漫天；人类呀，如此下去，两败俱残。互帮互助，才能共度难关
					</div>
			
					<div>
						没有滥砍滥发，就没有沙尘暴。没有污水排放，就没有河水脏黑。没有一次性用品，就没有成山的垃圾。地球妈妈需要我们每个人去呵护她，大自然环境需要我们大家珍惜它。今天世界环境日，让我们共同保护环境！
					</div>
			
					<div>
						我想让你在夜晚看到更明亮的星星，我想让你在白天呼吸到更清新的空气，我想让我们的孩子可以随意奔跑在翠绿的草原上，我更想四处河水都可以清澈见底。世界地球日，让我们共同将此条短信转发起来，将祝福传递开来，让弯腰拾起垃圾成为举手之劳，让我们的生活更加健康快乐
					</div>
				</div>
			</div>
		</div>
		<div class="ecology-right"></div>
	</div>
	<!-- ECOLOGY over-->
    
	<!-- SOME GOOD WORDS -->
	<div id="words">
		<p>SOME GOOD WORDS</p>
		<p>Lorem ipsum dolor sit amet, cum at inani interessetnisl omnium dolor amet amet qco modo cum text</p>
	</div>
	<!-- SOME GOOD WORDS over-->
    
	<!-- information -->
	<div id="information">
		<div class="inf-top">
			<p>我目送沿海的日落、紧抱一个醉生梦死的枕头、游不出回忆却学不会放手、怎么走。</p>
		</div>
		<div class="inf-bottom">
		    <div class="inf1">
           	  <h3>Recent Pics</h3>	
				<ul>
                	<li><img src="images/flower/13.jpg" width="70" height="50"></li>
                    <li><img src="images/flower/14.jpg" width="70" height="50"></li>
                    <li><img src="images/flower/15.jpg" width="70" height="50"></li>
                    <li><img src="images/flower/16.jpg" width="70" height="50"></li>
                    <li><img src="images/flower/17.jpg" width="70" height="50"></li>
                    <li><img src="images/flower/18.jpg" width="70" height="50"></li>
                    <li><img src="images/flower/19.jpg" width="70" height="50"></li>
                    <li><img src="images/flower/20.jpg" width="70" height="50"></li>
                    <li><img src="images/flower/timg.jpg" width="70" height="50"></li>
                </ul>
			</div>

			<div class="inf2">
				<h3>山盟海誓</h3>
				<p> 绿色无言，却轻轻地诉说着生命旅程的风风雨雨。它知道，活着就得面对残酷的现实，就得奋发向上。要想在山水间蓬勃着青春和激情，绽放着美丽与生机，就要拓展自己的生命空间，就要走过一程又一程漫漫长路，唤起一份份可歌可泣的感动。这种感动汹涌澎湃，仿佛瀑布奔向高崖之底，响彻天宇；这种感动裹挟着狂热的季风，刮走了胆怯与犹豫；这种感动亦如溪流在深山幽谷中蜿蜒，温润了你的沧桑，唤起了你的渴望。</p>
			</div>

			<div class="inf3">
				<h3>浅语</h3>
				<div class="inf3-1">
					<div class="img1"></div>
					<span>当掉的浅色寂语、你开了一家收购店、等来了遗忘的海角天光。</span>
				</div>
				<div class="inf3-1">
					<div class="img2"></div>/
					<span>橱窗里盛放的琳琅满目、是阜盛而过的年华栩栩生辉。</span>
				</div>
			</div>
		</div>
	</div>
    <!-- information over-->
</div>
<!-- login and reginter -->
<div id="locon">
	<div id="loncon-warp">
		<div id="title">
			<p>登录我们的网站<img src="images/close.png" width='30px' height='30px' onclick="closed();"></p>
			<p>输入您的用户名和密码登录：</p>
		</div>
		<div id="ioncon-input">
        	<form action="index2.php" method="post" name='form1'>
                <input type="text"  placeholder="Username" name="user" id="user"><br>
                <input type="password"  placeholder="Password" name="pwd" id="passwd"><br>
                <input type="text"  placeholder="identifying code" name="code" id="code"/>
                <div style="float:right;margin:23px 30px 0 0;"><img id="checkpic" onclick="changing();" src='code.php'/></div>
				<input type="submit" style="background-color:#DE615E" value="登录" name="sub">
            </form>
		</div>
	</div>
</div>
<div id="reg">
	<div id="reg-warp">
		<div id="title">
			<p>欢迎注册我们的网站<img src="images/close.png" width='30px' height='30px' onclick="closed();"></p>
			<p>输入您的用户名和密码进行注册：</p>
		</div>
		<div id="reg-input">
        	<form action="index2.php" method="post">
                <input type="text"  placeholder="Username"  name="username"><br>
                <input type="password"  placeholder="Password"  name="password"><br>
                <input type="password"  placeholder="Repeat-Password"  name="repassword"><br>
                <input type="submit" style="background-color:#DE615E" value="注册">
            </form>
		</div>
	</div>
</div>
</body>
<script>
    function changing(){
        document.getElementById('checkpic').src="code.php?"+Math.random();
    }
</script>
<script src="js/index.js"></script>
<script src="js/login.js"></script>
</html>