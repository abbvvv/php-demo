<?php
require_once 'dbconfig.php';
header("content-type:text/html;charset=utf-8");
//取表单数据
$studentId = $_REQUEST['studentId'];
$name = $_REQUEST['name'];
$classname = $_REQUEST['className'];
$birthday = $_REQUEST['birthday'];
$sex = $_REQUEST['sex'];
$nation = $_REQUEST['nation'];

$sql = "INSERT INTO student(id,studentId,name,className,birthday,sex,nation) VALUES (null,'$studentId','$name','$classname' ,'$birthday' ,'$sex' ,'$nation')";


if(mysql_query($sql)){
	echo "<script>alert('插入学生信息成功！！！');parent.location.href='index.php';</script>";
}else{
	echo "<script>alert('插入学生信息失败！！！');parent.location.href='index.php';</script>";
}