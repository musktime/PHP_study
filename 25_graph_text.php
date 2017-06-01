<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 * 绘制线条，背景填充，画矩形，绘制文字
 */
//准备
$img=imagecreatetruecolor(500,500);
$color=imagecolorallocate($img,0x32,0x90,0xab);
/*
 * 绘制文字
 */
imagestring($img,5,0,0,'hello',$color);
//输出
header('content-type:image/png');
imagepng($img);
//回收
imagedestroy($img);