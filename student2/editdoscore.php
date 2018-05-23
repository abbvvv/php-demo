<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );

// 取表单数据
$id = $_REQUEST ['id'];
$studentId = $_REQUEST ['studentId'];
$term = $_REQUEST ['term'];
$subject = $_REQUEST ['subject'];
$mark = $_REQUEST ['mark'];


// sql语句中字符串数据类型都要加引号，数字字段随便
$sql = "UPDATE score SET studentId='$studentId',term='$term',subject='$subject',mark='$mark' WHERE id=$id";
if (mysql_query ( $sql )) {
	echo "<script>alert('学生科目成绩修改成功！！！');parent.location.href='score.php';</script>";
	
} else {
	echo "<script>alert('学生科目成绩修改失败！！！');parent.location.href='score.php';</script>";
	
}
