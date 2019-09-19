<?php
session_start();
$con = mysqli_connect('localhost','root','QWAszx1103') or die('服务器连接失败！');
$db_select=mysqli_select_db($con,'protecttree');
mysqli_set_charset($con,'utf8');
if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['repassword']))
{
	$user = $_POST['username'];
	$pw = $_POST['password'];
	$repow = $_POST['repassword'];
	
	if($pw!=$repow)
	{
		echo '<script>alert("密码与repassword不一样！");window.location.href="index.php";</script>';
	}
	else{
		$ins = "insert into index1(`username`,`password`) values ('$user','$pw')";
		$result=mysqli_query($con,$ins);
		if($result)
		{
			echo '<script>alert("注册成功！");window.location.href="index1.php";</script>';
		}
		else{
			echo '<script>alert("注册失败！");window.location.href="index1.php";</script>';
		}
	}
}
else if(isset($_POST['user']) && isset($_POST['pwd']))
{
	$user = $_POST['user'];
	$pwd = $_POST['pwd'];
	$sel = "select * from index1 where username = '$user' and password = '$pwd'";
	$result=mysqli_query($con,$sel);
	if($result)
	{   
		$_SESSION['user'] = $user;//存储用户名到session
		$num=mysqli_num_rows($result);
		if($num > 0 && $_POST['code'] == @$_SESSION["vcode"])
		{
			echo "<script>alert('登陆成功!');</script>
			      <script>history.go(-1);</script>";
		}
		else if($num == 0 || $_POST['code'] != @$_SESSION["vcode"]) 
			echo "<script>alert('登陆失败!');history.go(-1);</script>";
	}
}
mysqli_close($con);
?>
