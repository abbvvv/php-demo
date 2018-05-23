<?php
   header("Content-type:image/jpeg");
   $img = imagecreate(70,30);
   imagecolorallocate($img,0,0,0);
   $w = imagecolorallocate($img,255,255,255);
   $code = rand(1000,9999);
   session_start();
   $_SESSION["code"] = $code;
   imagestring($img,5,10,10,$code,$w);
   imagejpeg($img);
   imagedestroy($img);   
?>