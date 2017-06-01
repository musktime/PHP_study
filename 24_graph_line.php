<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 */

/*
 * 准备绘制资源
 */

//画布
$img=imagecreatetruecolor(500,500);
//画笔
$color=imagecolorallocate($img,0x23,0xAA,0x87);
//画线 [坐标1到坐标2]
imageline($img,0,0,500,500,$color);

/**
 * 输出资源
 */
header('content-type:image/png');
imagepng($img);

/**
 * 回收资源
 */
imagedestroy($img);