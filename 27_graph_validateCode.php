<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 */
$img=imagecreatetruecolor(100,48);
$black=imagecolorallocate($img,0x00,0x00,0x00);
$green=imagecolorallocate($img,0x00,0xff,0x00);
$red=imagecolorallocate($img,0xff,0x00,0x00);
$blue=imagecolorallocate($img,0x00,0x00,0xff);
$white=imagecolorallocate($img,0xff,0xff,0xff);

imagefill($img,0,0,$white);


//随机数字
$code='';
for($i=0;$i<4;$i++){
    $code.=rand(0,9);
}
imagestring($img,5,30,17,$code,$black);

//噪点干扰
for ($i=0;$i<100;$i++){
    imagesetpixel($img,rand(0,100),rand(0,100),$black);
    imagesetpixel($img,rand(0,100),rand(0,100),$green);
    imagesetpixel($img,rand(0,100),rand(0,100),$red);
    imagesetpixel($img,rand(0,100),rand(0,100),$blue);
}

//输出
header('content-type:image/png');
imagepng($img);

imagedestroy($img);