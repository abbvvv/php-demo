
<?php
header ( "content-type:text/html;charset=utf-8" );
if(!isset($_SESSION)){
    session_start();
}
session_destroy();
echo "<script>alert('退出成功');parent.location.href='login.php';</script>";	