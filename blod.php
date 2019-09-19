<?php
	session_start();
	@$user = $_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BLOD</title>
<link href="css/blod.css" rel="stylesheet" type="text/css">
</head>

<body onLoad="goPage(1,3)">
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
		<p><a href="index1.php">HOME</a> / <a href="GALLERY.php">BLOD</a></p>
	</div>
    <!-- body -->
    <div id="center">
    	<div id="left">
        	<div id="article">
                <h2>散文集选</h2>
                <ul id="circle">
                	<li><a href="#">慈颜犹存</a></li>
                    <li><a href="#">每一次相遇，都是温情的凝眸</a></li>
                    <li><a href="#">简单很难，难得简单</a></li>
                    <li><a href="#">给时间点时间，给自己点自己</a></li>
                    <li><a href="#">无奈朝来寒雨晚来风</a></li>
                    <li><a href="#">重温远去的青春</a></li>
                    <li><a href="#">彼岸花，余生等待</a></li>
                    <li><a href="#">为你一人，散发出光芒的温暖</a></li>
                    <li><a href="#">时光蹉跎之感慨</a></li>
                </ul>
            </div>
            <h2>图文选集</h2>
            <div id="article-img"></div>
        </div>
        <!-- left over-->
        <div id="right">
<?php
$conn = mysqli_connect("localhost","root","QWAszx1103","protecttree") or die("数据库服务器连接错误");  
mysqli_set_charset($conn,"utf8");  
if(@$_GET['page']=='') {
	$_GET['page']=1;}
if (is_numeric($_GET['page'])){    
	$page_size = 3;     		   					       
	$query = "select title from article order by title desc";   
	$result = mysqli_query($conn,$query);      				
	$message_count = mysqli_num_rows($result);		        
	$page_count = ceil($message_count/$page_size);	  	    
	$offset = ($_GET['page']-1)*$page_size;				     
	$sql = mysqli_query($conn,"select * from article order by title desc limit $offset, $page_size");
	$row = mysqli_fetch_object($sql);                       
	if(!$row){                                              
		echo "<font color='red'>暂无公告信息!</font>";
	}
	do{
?>
<table>
	 <div style="margin-bottom:25px;">
         <tr style="width:100%;">
            <td><img src="images\blod\<?php echo $row->img;?>.jpg" width="400" height="250"></td>
             <td style="font-size:14px; text-align:left;line-height:25px;padding:10px;">
               <h2><?php echo $row->title;?></h2><br />
               <p><b>作者:<?php echo $row->author;?> </b>日期：2016年5月12日</p><br />
               <p style="width:550px"><?php echo $row->wenzhang;?></p>
             </td>
         </tr>
     </div>
</table>
    <?php
		}while($row = mysqli_fetch_object($sql));    
	}
	?>
<br>
<table style="width:100%; font-size:14px; border:0px; cellspacing:0px; cellpadding:0px;">
   <tr style="font-size:20px">
		<td style="font-size:15px" width="37%">&nbsp;&nbsp;页次：<?php echo $_GET['page'];?>/<?php echo $page_count;?>页&nbsp;记录：<?php echo $message_count;?> 条&nbsp; </td>
		<td width="63%" align="right">
		<?php
			if($_GET['page']!=1){                                          
				echo  "<a href='blod.php?page=1'>首页</a>&nbsp;";        
				echo "<a href=blod.php?page=".($_GET['page']-1)."><上一页</a>&nbsp;";
			}
			if($_GET['page']<$page_count){                                  
				echo "<a href=blod.php?page=".($_GET['page']+1).">下一页></a>&nbsp;";
				echo "<a href=blod.php?page=".$page_count.">尾页</a>";                  
			}
			mysqli_free_result($sql);                                   
		    mysqli_close($conn);                                         
		?>
    </tr>
</table>
        </div>
        <!-- right over-->
    </div>
    <!-- center over-->
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
                <input type="text"  placeholder="Username" name="user"><br>
                <input type="password"  placeholder="Password" name="pwd"><br>
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
<script src="js/login.js"></script>
</body>
</html>