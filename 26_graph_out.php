<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 */
$img=imagecreatetruecolor(500,500);
$color=imagecolorallocate($img,0x21,0xEE,0x21);

imagestring($img,19,250,250,'hello',$color);

/**
 * 输出
 */
//jpeg格式会压缩，故需要指定压缩质量
imagejpeg($img,'./images/hello.jpg',88);
//png
imagepng($img,'./images/hello.png');
//gif
imagegif($img,'./images/hello.gif');



imagedestroy($img);