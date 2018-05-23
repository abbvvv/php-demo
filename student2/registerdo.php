<?php
require_once 'dbconfig.php';
header("content-type:text/html;charset=utf-8");
//取表单数据
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$password2 = sha1($password);

//sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "INSERT INTO user(id, username, password, status) VALUES (null,'$username','$password2',1)";
//exit($sql);

if(mysql_query($sql)){
	echo "<script>alert('注册成功！去登录');parent.location.href='login.php';</script>";
}else{
	echo "<script>alert('注册失败！！');parent.location.href='register.php';</script>";
}


