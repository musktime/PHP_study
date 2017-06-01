<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 */
$url='http://www.iyi8.com/uploadfile/2014/0521/20140521105216901.jpg';
$content=file_get_contents($url);
$fileName='tmp.jpg';
file_put_contents($fileName,$content);

$url='http://wiki.ubuntu.org.cn/images/3/3b/Qref_Edubuntu_Logo.png';
file_put_contents('logo.png',file_get_contents($url));


//添加水印
$im=imagecreatefromjpeg($fileName);
$logo=imagecreatefrompng('logo.png');
$size=getimagesize('logo.png');
imagecopy($im,$logo,15,15,0,0,$size[0],$size[1]);

header('content-type:image/jpeg');
imagepng($im);