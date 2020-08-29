<?php session_start();
$image=imagecreate(100,25);
//$colorRed1=imagecolorallocate($image,0,0,0);
//$colorRed2=imagecolorallocate($image,255,83,83);
$colorY1=imagecolorallocate($image,255,255,0);
$colorY2=imagecolorallocate($image,255,255,83);
imagepng($image);
?>