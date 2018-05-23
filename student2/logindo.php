<?php
header ( "content-type:text/html;charset=utf-8" );
if (! isset ( $_SESSION )) {
	session_start ();
}
if (isset ( $_SESSION ['userName'] )) {
	header ( "location:index.php" );
} elseif (! isset ( $_REQUEST ['username'] )) {
	header ( "location:login.php" );
} else {
	$username = $_POST ['username'];
	$passcode = $_POST ['passcode'];
	$yz = $_POST['code'];
	$code = $_SESSION["code"];
	$password2 = sha1 ( $passcode );
	require_once 'dbconfig.php';
	$sql = "select * from user where username= '$username' and password='$password2'";
	$result = mysql_query ( $sql, $conn );
	if ($row = mysql_fetch_array ( $result )) {
		if($yz == $code){
		$_SESSION ['userName'] = $username;
		echo "<script>alert('登录成功！');parent.location.href='index.php';</script>";
		
	}else{
		echo "<script>alert('验证码错误！');parent.location.href='login.php';</script>";
	}
	} else {
		echo "<script>alert('用户名或密码错误！');parent.location.href='login.php';</script>";
	}
}
?>