<?php
header ( "content-type:text/html;charset=utf-8" );
if (! isset ( $_SESSION )) {
	session_start ();
}
if (! isset ( $_SESSION['userName'] )) {
	header ( "location:login.php" );
} else {
	$id = $_REQUEST['id'];
	require_once 'dbconfig.php';
	$sql = "delete from score where id='$id'";
	$result = mysql_query ( $sql, $conn );
	if ($result) {
		echo "<script>alert('删除成功!');parent.location.href='score.php';</script>";
		
	} else {
		echo "<script>alert('删除失败!');parent.location.href='score.php';</script>";
		
	}
}
?>