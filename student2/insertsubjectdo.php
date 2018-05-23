<?php
require_once 'dbconfig.php';
header("content-type:text/html;charset=utf-8");
//取表单数据
$subject=$_POST['subject'];
$teacher=$_POST['teacher'];
$content=$_POST['content'];

$sql = "INSERT INTO subject(id,subjectname,teacher,content) VALUES (null,'$subject','$teacher','$content')";

if(mysql_query($sql)){
	echo "<script>alert('插入科目信息成功！！！');parent.location.href='subject.php';</script>";
}else{
	echo "<script>alert('插入科目信息失败！！！');parent.location.href='subject.php';</script>";
}