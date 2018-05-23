<?php
header ( "content-type:text/html;charset=utf-8" );
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
	header ( "location:login.php" );
} else {
	$oldpassword = sha1 ( $_POST ['oldpassword'] );
	$password = sha1 ( $_POST ['password'] );
	$password1 = sha1 ( $_POST ['password1'] );
	//验证两次是否一致
	if($password!=$password1){
		echo "<script>alert('两次密码不一致！');</script>";
		echo "两次密码不一致！<br/>";
		echo "<a href='newpassword.php>返回</a>";
	}
	//取出用户名
	$username = $_SESSION['userName'];
	require_once 'dbconfig.php';
	// 根据用户名和密码去查询帐号表
	$sql = "select * from user where username= '$username' and password='$oldpassword'";
	$result = mysql_query ( $sql, $conn );
	if ($row = mysql_fetch_array ( $result )) {
		$id = $row['id'];
		//修改密码
		$query = "UPDATE user SET password='$password' WHERE id='$id'";
		$result = mysql_query ( $query, $conn );
		if($result){
			session_destroy();
			echo "<script>alert('密码修改成功!');parent.location.href='login.php';</script>";
		}else{
			echo "<script>alert('密码修改失败!');parent.location.href='index.php';</script>";
		}	
	} else {
		echo "<script>alert('原始密码错误!');parent.location.href='index.php';</script>";
	}
}
?>