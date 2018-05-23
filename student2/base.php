<?php 
if (! isset ( $_SESSION )) {
    session_start ();
}
if (! isset ( $_SESSION ['userName'] )) {
    header ( "location:login.php" );
}
$userName = $_SESSION ['userName'];
//计算当前文件名
$url = $_SERVER['PHP_SELF'];
$start = strrpos($url,'/');
$end = strrpos($url,'.');
$menuName = substr($url,$start+1,$end-$start-1);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>学生信息管理系统</title>
<!-- BOOTSTRAP STYLES-->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- MORRIS CHART STYLES-->
<link href="assets/js/custom.js" rel="stylesheet" />
<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
<!-- CUSTOM STYLES-->
<link href="assets/css/custom.css" rel="stylesheet" />
<!-- GOOGLE FONTS-->
<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans'
     rel='stylesheet' type='text/css' /> -->
<script type="text/javascript" src="js/laydate.js"></script>
    </head>
    <body>
    <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation"
        style="margin-bottom: 0">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span> <span
            class="icon-bar"></span> <span class="icon-bar"></span> <span
            class="icon-bar"></span>
            </button>
            
            </div>
            <div
            style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
            <img src="images/user.jpg" style="height: 30px;width: 30px">
            用户名：<?=$userName?>&nbsp;&nbsp;<a href='newpassword.php' class="btn btn-success">修改密码</a>&nbsp;&nbsp;<a href="loginout.php"
					class="btn btn-danger square-btn-adjust">退出登录</a>
			</div>
		</nav>
		<!-- /. NAV TOP  -->
		<nav class="navbar-default navbar-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">
					
					<li><a <?="index"==$menuName?"class='active-menu'":""?> href="index.php"><i
							class="fa   fa-user fa-3x"></i>学生信息管理</a></li>
					<li><a <?="score"==$menuName?"class='active-menu'":""?> href="score.php"><i
							class="fa fa-university fa-3x"></i>学生成绩管理</a></li>
					<li><a <?="exam"==$menuName?"class='active-menu'":""?> href="subject.php"><i
							class="fa fa-pencil fa-3x"></i> 科目管理</a></li>
					
				</ul>
			</div>
		</nav>
		<!-- /. NAV SIDE  -->