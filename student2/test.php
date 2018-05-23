<?php
$url = $_SERVER['PHP_SELF'];
$start = strrpos($url,'/');
$end = strrpos($url,'.');
echo substr($url,$start+1,$end-$start-1); 