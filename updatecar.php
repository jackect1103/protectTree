<?php
	session_start();
	@$user = $_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UpdateCar</title>
<link href="css/updatecar.css" rel="stylesheet" type="text/css">
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
    <!-- nav over--->   
    <!-- header -->
	<div id="header">
		<p>INFORMATION</p>
		<p><a href="index1.php">HOME</a> / <a href="updatecar.php">CARINFO</a></p>
	</div>
    <!-- header over-->
    <!-- carinfo -->
    <div id="carinfo">
        <div id="center">
            <h2>您所选购的商品如下</h2>
            <form action="" method="post" id="form1" action="" style="width:650px;margin:0 350px;">
              <table style="width:100%;margin-left:-15px;">
                 <tr style="width:100%;font-size:20px;">
                     <td style="width:150px;">	
                       <div style="float:left;">商品照片</div>
                     </td>
                     <td style="width:250px;">
                       <div style="float:left;">商品名称及单价</div>
                     </td>
                     <td style="width:250px;">
                       <div style="float:left;">商品数量</div>
                     </td>
                     <td style="width:250px;">
                       <div style="float:left;">价钱</div>
                     </td>
                     <td style="width:150px;">
                       <div style="float:left;">删除商品</div>
                     </td>
                  </tr>
               </table>
            </form>
             <form method="post" id="form1" action="" style="width:80%;height:auto;margin:0 150px;">
                <div id="show">
            <?php
    $conn = mysqli_connect("localhost","root","QWAszx1103","protecttree") or die("数据库服务器连接错误");  
    mysqli_set_charset($conn,"utf8"); 
    
    //获取shopping.php的数据
    if(isset($_POST['price']))
    {
        for($i=0;$i < count($_POST['price']); $i++)
        {
            $value = $_POST['price'][$i];
            //数量
			//数量*价格
            $money = $value*150;
			$id = $i+1;
            $insert = "INSERT INTO `shopcar`(`username`,`img`, `value`, `price`) 
			            VALUES ('$user','$id','$value','$money')";
            $result = mysqli_query($conn,$insert);
            if($result)
            {
                echo "<script>window.location.href='updatecar.php'</script>";
            }
        }
    }
    //获取shopping.php的数据over    
    $sql = mysqli_query($conn,"select * from shopcar,shopping where shopping.img = shopcar.img and `username` = '$user'");
    $num = mysqli_num_rows($sql);
    if($num > 0)
    {
		$row = mysqli_fetch_object($sql);   
		$total;                
		do{
			@$total += ($row->price);
		?>      
			 <table style="width:100%;border-bottom:1px solid #ccc;margin-left:-65px;margin-bottom:10px;">
				  <tr style="width:100%;font-size:15px;">
					  <td style="width:250px;">	
						 <div style="float:right;"><img style="border-radius:30%;" src="images\flower\<?php echo @$row->img;?>.jpg" width="50" height="50"/></div>
					  </td>
					  <td style="width:300px;padding-left:105px;box-sizing:border-box;">
						 <div style="float:left;"><?php echo @$row->name;?><?php echo @$row->price;?></div>
					  </td>
					  <td style="width:250px;">
						 <div style="float:left;">
							<input style="width:100px;height:40px;" name='value[]' type='text' value='<?php  echo $row->value; ?>'/>&nbsp;&nbsp;束
						 </div>
					  </td>
					  <td style="width:250px;">
						 <div style="float:left;text-align:center;">￥<?php echo @$row->price;?></div>
					  </td>
                      <td style="width:250px;">
						 <div style="float:left;text-align:center;"><a href='delete.php?id=<?php echo $row->img;?>'><img src="images/delete.png" width="18" height="18" /></a></div>
					  </td>
				 </tr>
			</table>
			<?php
				}while($row = mysqli_fetch_object($sql));  
    }else{
        echo "<p style='font-size:25px;color:red;'>您尚未购买商品!</p>";
    } 
        ?>			
                
                </div>
                <div id="total">
                    Subtotal:￥<?php echo @$total; ?>
                    <input style="margin-left:35px;width:100px;height:50px;background-color:#83D944;color:#fff;font-size:20px;" type="submit" value="修改"/>
                </div>
                </form>
        </div>
        <br style='clear:both'/><!--让center 将父元素撑开-->
    </div>
    <!-- carinfo over-->
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
 <!-- container over--->
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
 <!-- login and reginter over-->
 <?php
$conn = mysqli_connect("localhost","root","QWAszx1103","protecttree") or die("数据库服务器连接错误");  
mysqli_set_charset($conn,"utf8"); 
if(isset($_POST['value']))
{	
	for($i=0;$i < count($_POST['value']); $i++)
	{
		$val = $_POST['value'][$i];
		echo $val."<br>";
		echo count($_POST['value'])."<br>";
		$id = $i+1;
		$result = mysqli_query($conn,"update shopcar set `value` = $val where `img`= $id and `username` = '$user'");
		$money = $val*150;
		$UPDATE2 = "UPDATE `shopcar` SET `price`= '$money' where `img`= $id and `username` = '$user'";
	    $result1 = mysqli_query($conn,$UPDATE2);
	}
	if($result1)
	{
		
		echo '<script>alert("您已修改成功!");</script>';
		echo '<script>window.location.href="updatecar.php"</script>';
	}
}
 
mysqli_close($conn);
?>

</body>
<script>
    function changing(){
        document.getElementById('checkpic').src="code.php?"+Math.random();
    }
</script>
<script src="js/login.js"></script>
</html>