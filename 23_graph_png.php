<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 * 通过GD库，可以对JPG、PNG、GIF、SWF等图片进行处理。GD库常用在图片加水印，验证码生成等方面
 */

/**
 * 准备
 */
//新建画布，通过imagecreatetruecolor函数可创建真彩色空白图片
$img=imagecreatetruecolor(100, 100);
//画笔颜色，通过imagecolorallocate函数进行分配
$red=imagecolorallocate($img, 0xFF, 0x00, 0x00);

/**
 * 输出
 */
header("Content-type: image/png");
// 背景填充 return bool
imagefill($img, 0, 0, $red);
//PNG格式输出图像流[image]到标准输出[通常为浏览器]
imagepng($img);
//输出到文件
/**
 * 回收
 */
//销毁图像，释放与 image 关联的内存
imagedestroy($img);