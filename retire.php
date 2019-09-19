<?php
session_start();
$user = $_SESSION['user'];
unset($_SESSION['user']);
$delete=session_destroy();
if($delete){
	echo "<script>alert('退出成功');window.location.href='index1.php'</script>";
}
?>