<?php
	session_start();
	@$user = $_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SHOPPING</title>
<link href="css/sh.css" rel="stylesheet" type="text/css">
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
		<p><a href="index1.php">HOME</a> / <a href="Shopping">Shopping</a></p>
	</div>
    <!-- SHOOPING -->
    <div id="SHOOPING">
    	<P id="shopping">Love green, start with me</P>
        <div id="list"><a href="updatecar.php">购物清单</a></div>
    	<div id="img"></div>
    </div>
    <!--- goods-->
    <div id="goods">
    	<div id="goo">
        	<ul>
                <li>广告优惠</li>
                <li>今日优惠</li>
            </ul>
        </div>
        <div id="flower">
        	<ul style="display:block;">
                <h2>本周刊登广告</h2>
                <p>我们已将所有广告优惠汇集到一个地方，因此您不会错过很多优惠。</p>
                <li>
               	  	<div id="wupin">
                      <div id="picture">
                        <img src="images/flower/1.jpg" width="121" height="121" />
                      </div>
                      <div id="name">桂花</div>
                      <div id="price">￥150 <del>￥200</del></div>
                      <div class="snipcart-details" id="guihua">
						<input type="submit" name="submit" value="Information" class="button"/>
					  </div>
                   </div>
                </li>
                <li>
                  <div id="wupin">
                      <div id="picture">
                        <img src="images/flower/2.jpg" width="121" height="121" />
                      </div>
                      <div id="name">紫薇花</div>
                      <div id="price">￥150 <del>￥210</del></div>
                      <div class="snipcart-details">
						<input type="submit" name="submit" value="Information" class="button"/>
					  </div>
                  </div>
                </li>
                <li>
               	  	<div id="wupin">
                      <div id="picture">
                        <img src="images/flower/3.jpg" width="121" height="121" />
                      </div>
                      <div id="name">康奶昔</div>
                      <div id="price">￥150 <del>￥220</del></div>
                      <div class="snipcart-details">
						<input type="submit" name="submit" value="Information" class="button"/>
					  </div>
                   </div>
                </li>
                <li>
                  <div id="wupin">
                      <div id="picture">
                        <img src="images/flower/4.jpg" width="121" height="121" />
                      </div>
                      <div id="name">兰花</div>
                      <div id="price">￥150 <del>￥200</del></div>
                      <div class="snipcart-details">
						<input type="submit" name="submit" value="Information" class="button"/>
					  </div>
                  </div>
                </li>
                <li>
               	  	<div id="wupin">
                      <div id="picture">
                        <img src="images/flower/5.jpg" width="121" height="121" />
                      </div>
                      <div id="name">六月雪</div>
                      <div id="price">￥150 <del>￥200</del></div>
                      <div class="snipcart-details">
						<input type="submit" name="submit" value="Information" class="button"/>
					  </div>
                   </div>
                </li>
                <li>
                  <div id="wupin">
                      <div id="picture">
                        <img src="images/flower/6.jpg" width="121" height="121" />
                      </div>
                      <div id="name">曼陀罗</div>
                      <div id="price">￥150 <del>￥200</del></div>
                      <div class="snipcart-details">
						<input type="submit" name="submit" value="Information" class="button"/>
					  </div>
                  </div>
                </li>
            </ul>
            <ul>
                <h2>本星期</h2>
                <p>我们已将所有广告优惠汇集到一个地方，因此您不会错过很多优惠。</p>
                <li>
               	  	<div id="wupin">
                      <div id="picture">
                        <img src="images/flower/7.jpg" width="121" height="121" />
                      </div>
                      <div id="name">茉莉花</div>
                      <div id="price">￥150 <del>￥200</del></div>
                      <div class="snipcart-details">
						<input type="submit" name="submit" value="Information" class="button"/>
					  </div>
                   </div>
                </li>
                <li>
                  <div id="wupin">
                      <div id="picture">
                        <img src="images/flower/8.jpg" width="121" height="121" />
                      </div>
                      <div id="name">水仙</div>
                      <div id="price">￥150 <del>￥200</del></div>
                      <div class="snipcart-details">
						<input type="submit" name="submit" value="Information" class="button"/>
					  </div>
                  </div>
                </li> 
                <li>
               	  	<div id="wupin">
                      <div id="picture">
                        <img src="images/flower/9.jpg" width="121" height="121" />
                      </div>
                      <div id="name">睡莲</div>
                      <div id="price">￥150 <del>￥200</del></div>
                      <div class="snipcart-details">
						<input type="submit" name="submit" value="Information" class="button"/>
					  </div>
                   </div>
                </li>
                <li>
                  <div id="wupin">
                      <div id="picture">
                        <img src="images/flower/10.jpg" width="121" height="121" />
                      </div>
                      <div id="name">桃花</div>
                      <div id="price">￥150 <del>￥200</del></div>
                      <div class="snipcart-details">
						<input type="submit" name="submit" value="Information" class="button"/>
					  </div>
                  </div>
                </li>
                <li>
               	  	<div id="wupin">
                      <div id="picture">
                        <img src="images/flower/11.jpg" width="121" height="121" />
                      </div>
                      <div id="name">迎春花</div>
                      <div id="price">￥150 <del>￥200</del></div>
                      <div class="snipcart-details">
						<input type="submit" name="submit" value="Information" class="button"/>
					  </div>
                   </div>
                </li>
                <li>
                  <div id="wupin">
                      <div id="picture">
                        <img src="images/flower/12.jpg" width="121" height="121" />
                      </div>
                      <div id="name">月季</div>
                      <div id="price">￥150 <del>￥200</del></div>
                      <div class="snipcart-details">
						<input type="submit" name="submit" value="Information" class="button"/>
					  </div>
                  </div>
                </li>
            </ul>
        </div>
        <!-- 购物单 -->
        <div id="shopping-list">
			<form method="post" id="form1" action="updatecar.php" style="width:90%; height:450px;">
                <div id="thead">选择心目中的那个它！</div>
                <div id="tbody">
<?php
$conn = mysqli_connect("localhost","root","QWAszx1103","protecttree") or die("数据库服务器连接错误");  
mysqli_set_charset($conn,"utf8"); 	     
$sql = mysqli_query($conn,"select * from shopping");
$row = mysqli_fetch_object($sql);                       
do{
?>
       <table style="width:100%;">
              <tr style="width:100%;">
                 <td>	
                   <div style="float:left;"><img src="images/flower/<?php echo $row->img;?>" width="50" height="50" /></div>
				   <div style="float:left;width:125px;line-height:45px;padding:0 15px;"><?php echo $row->name;?><?php echo $row->price;?></div>
				   <div style="float:left;margin-top:5px;line-height:45px;text-align:center">
                       <input type="text" name="price[]" class="flowers" placeholder="0" >
                       <b>￥0.00</b>
                   </div>
                 </td>
  			  </tr>
      </table>
                 <?php
		}while($row = mysqli_fetch_object($sql));    
	?>
			    </div>
               <div id="tfoot">
               		Subtotal:<span id="totalprice">￥0.00</span>
                   <input type="submit" value="Add to car" id="subinput"/>
                   <input type="button" value="Reset" id="reset"/>
               </div>
            </form>
        </div>
    </div>
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
    <!-- informtion over -->
</div>
 <!-- container over -->
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
<script src="js/shopping.js"></script>
</html>