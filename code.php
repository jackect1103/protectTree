<?php
ob_clean();
header("Content-type:image/jpeg"); 
$w = 100; 
$h = 45;
$str = Array(); 
$string = "abcdefghijklmnopqrstuvwxyz0123456789";
$vcode="";
for($i = 0;$i < 4;$i++){
    $str[$i] = $string[rand(0,35)];
    $vcode .= $str[$i];
}
session_start(); 
$_SESSION["vcode"] = $vcode;
$im = imagecreatetruecolor($w,$h);
$white = imagecolorallocate($im,255,255,255); 
$black = imagecolorallocate($im,0,0,0); 
imagefilledrectangle($im,0,0,$w,$h,$white); 
imagerectangle($im,0,0,$w-1,$h-1,$black); 
//生成雪花背景
for($i = 1;$i < 200;$i++){
    $x = mt_rand(1,$w-9);
    $y = mt_rand(1,$h-9);
    $color = imagecolorallocate($im,mt_rand(200,255),mt_rand(200,255),mt_rand(200,255));
    imagechar($im,1,$x,$y,"*",$color);
}
//将验证码写入图案
for($i = 0;$i < count($str);$i++){
    $x = 13 + $i * ($w - 15)/4;
    $y = mt_rand(3,$h / 3);
    $color = imagecolorallocate($im,mt_rand(0,225),mt_rand(0,150),mt_rand(0,225));
    imagechar($im,5,$x,$y,$str[$i],$color);
}

imagejpeg($im);
imagedestroy($im);
?>