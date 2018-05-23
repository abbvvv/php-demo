<?php
require_once 'dbconfig.php';
header("content-type:text/html;charset=utf-8");
//取表单数据
$studentId = $_REQUEST['studentId'];
$term = $_REQUEST['term'];
$subject = $_REQUEST['subject'];
$mark = $_REQUEST['mark'];


//sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "INSERT INTO score(id, studentId, term, subject, mark) VALUES (null,'$studentId','$term','$subject' ,'$mark')";
//exit($sql);

if(mysql_query($sql)){
	echo "<script>alert('插入学生成绩成功！！！');parent.location.href='score.php';</script>";
	
}else{
	echo "<script>alert('插入学生成绩失败！！！');parent.location.href='score.php';</script>";
	
}
