<?php
	session_start();
	@$user = $_SESSION['user'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="pragma" content="no-cache" />
<title>无标题文档</title>
</head>

<body>
<?php
$con = mysqli_connect('localhost','root','QWAszx1103') or die('服务器连接失败！');
$db_select=@mysqli_select_db($con,'protecttree');
/*if(!$db_select)
{
	echo "连接数据库失败！";
}
else{
	echo "连接数据库成功！";	
}*/
mysqli_set_charset($con,'utf8');
if(isset($_POST['Birthday']) && isset($_POST['qq']) && isset($_POST['phone']) && isset($_POST['message']))
{
	
	$Birthday = $_POST['Birthday'];
	$qq = $_POST['qq'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$select = 'select * form message where name=$name';
	$result1 = mysqli_query($con,$select);
	$num = @mysqli_num_rows($result1);
	if($Birthday == '' || $qq == '' || $phone == '' || $message == '')
	{
		echo "<script>alert('请填写内容！');window.location.href='Message.php'</script>";
	}
	else{
			$insert = "insert into message(`name`,`Birthday`,`qq`,`phone`,`mag`) 
					values ('$user','$Birthday','$qq','$phone','$message')";		
			$result = mysqli_query($con,$insert);
			if($result)
			{
				echo '<script>alert("谢谢您的留言呦！");window.location.href="Message.php"</script>';
			}
			else{
				echo '<script>alert("留言失败啦！");window.location.href="Message.php"</script>';
			}
		}
}
mysqli_close($con);

?>
</body>
</html>