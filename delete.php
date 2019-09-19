<?php
session_start();
@$user = $_SESSION['user'];
$con = mysqli_connect('localhost','root','QWAszx1103') or die('服务器连接失败！');
mysqli_set_charset($con,'utf8');
$db_select=mysqli_select_db($con,'protecttree');
if(isset($_GET['id'])){
	$num=$_GET['id'];
	$delete = "DELETE FROM `shopcar` WHERE img = $num and `username` = '$user'";
	$result = mysqli_query($con,$delete);
	if($result){
		echo '<script>alert("Delete successful");</script>';
		header('location:updatecar.php');
	}
	else{
		echo '<script>alert("Deleted unsuccessful");</script>';
		header('location:updatecar.php');
	}
}
mysqli_close($con);
?>