<?php
	session_start();
	@$user = $_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="pragma" content="no-cache" />
<title>MESSAGE</title>
<link href="css/Message.css" rel="stylesheet" type="text/css">
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
   	<!--Message -->
    <div id="message">
    	<h2>如果不能飞越太平洋去见我们的话..<br />那么就只剩下一个办法了，留言！</h2>
        <p>我拒绝更好更圆的月亮，拒绝未知的疯狂，拒绝声色的张扬，不拒绝你。</p>
        <div id="form1">
        	<form role="form" action="message1.php" method="post">
			     <div class="form-group">
			         <input type="text" name="Birthday" placeholder="Birthday..." id="name">
			     </div>
			     <div class="form-group">
			         <input type="text" name="qq" placeholder="QQ..." id="QQ">
			     </div>
                 <div class="form-group">
			         <input type="text" name="phone" placeholder="phone..." id="phone">
			     </div>
			     <div class="form-group">
			         <textarea rows="5" cols="55" name="message" placeholder="Message..."></textarea>
			     </div>
                 <div class="form-group">
                     <input type="submit" value="Send message" name="sub" id="btn" style="background-color:#19B9E7">
                 </div>
		   </form>
    </div>
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
<script src="js/login.js"></script>
</html>