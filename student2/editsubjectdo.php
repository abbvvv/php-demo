<?php
require_once 'dbconfig.php';
header ( "content-type:text/html;charset=utf-8" );
//利用隐藏的id值来更新数据
$id=$_POST['id'];
$subject=$_POST['subject'];
$teacher=$_POST['teacher'];
$content=$_POST['content'];
//写更新数据库语言
$sql="UPDATE subject SET subjectname='$subject',teacher='$teacher',content='$content' WHERE id=$id";
if(mysql_query($sql)){
	echo "<script>alert('科目信息修改成功！！！');parent.location.href='subject.php';</script>";
} else{
	echo "<script>alert('科目信息修改失败！！！');parent.location.href='subject.php';</script>";
}