<?php
	session_start();
	@$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GALLERY</title>
	<link href="css/GALLERY.css" rel="stylesheet" type="text/css">
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
            <form action="index2.php" method="post">
                <tr>
                    <td><input type='button' value="登录" id="longin" name="longin"/></td>
                    <td><input type='button' value="注册" id="register" name="register"/></td>
                    <td><div id="retire"><a href="retire.php" style="text-decoration:none;color:#fff;">退出</a></div></td>
                </tr>
            </form>
        </div>
	</div>
	<!-- header -->
	<div id="header">
		<p>GALLERY MASSONERY</p>
		<p><a href="index1.php">HOME</a> / <a href="GALLERY.php">GALLERY</a></p>
	</div>

	<!-- tab-picture -->
<div id="tab">
		<ul id="select">
			<li>ALL</li>
			<li>LOVE</li>
			<li>FOREST</li>
			<li>ENERGY</li>
			<li>NATURAL</li>
		</ul>

	<div class="picture">
		<ul>
			<li>
				<img src="images\gallery\image-4.jpg" width="300" height="440">
				<span>鸟语花香</span>
			</li>
			<li>
				<img src="images\gallery\image-7.jpg" width="300" height="440">
				<span>湖光山色</span>
			</li>
			<li>
				<img src="images\gallery\image-8.jpg" width="300" height="440">
				<span>水天一色</span>
			</li>
			<li>
				<img src="images\gallery\image-9.jpg" width="300" height="440">
				<span>山清水秀</span>
			</li>
			<li>
				<img src="images\gallery\image-10.jpg" width="300" height="440">
				<span>春意盎然</span>
			</li>
			<li>
				<img src="images\gallery\image-11.jpg" width="300" height="440">
				<span>姹紫嫣红</span>
			</li>
			<li>
				<img src="images\gallery\image-12.jpg" width="300" height="440">
				<span>草长莺飞</span>
			</li>
			<li>
				<img src="images\gallery\image-13.jpg" width="300" height="440">
				<span>春和景明</span>
			</li>
		</ul>

		<ul>
		  	<li>
				<img src="images\gallery\image-7.jpg" width="300" height="440">
				<span>湖光山色</span>
			</li>
			<li>
				<img src="images\gallery\image-8.jpg" width="300" height="440">
				<span>水天一色</span>
			</li>
		</ul>

		<ul>
			<li>
				<img src="images\gallery\image-9.jpg" width="300" height="440">
				<span>山清水秀</span>
			</li>
			<li>
				<img src="images\gallery\image-10.jpg" width="300" height="440">
				<span>春意盎然</span>
			</li>
		</ul>

		<ul>
			<li>
				<img src="images\gallery\image-11.jpg" width="300" height="440">
				<span>图形绘制</span>
			</li>
			<li>
				<img src="images\gallery\image-12.jpg" width="300" height="440">
				<span>草长莺飞</span>
			</li>
		</ul>

		<ul>
			<li>
				<img src="images\gallery\image-13.jpg" width="300" height="440">
				<span>春和景明</span>
			</li>
			<li>
				<img src="images\gallery\image-4.jpg" width="300" height="440">
				<span>鸟语花香</span>
			</li>
		</ul>
	</div>
</div>
	<!-- tab-picture over-->
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
					<div class="img2"></div>
					<span>橱窗里盛放的琳琅满目、是阜盛而过的年华栩栩生辉。</span>
				</div>
			</div>
		</div>
	</div>
    <!-- information over-->
</div>
<!-- container over-->
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
<script>
    function changing(){
        document.getElementById('checkpic').src="code.php?"+Math.random();
    }
</script>
<script src="js/GALLERY.js"></script>
<script src="js/login.js"></script>
</body>
</html>