<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 */
$fileName='./resource/data.config';
$fileContent=file_get_contents($fileName);
echo $fileContent.'<br/>-----------------1-------------<br/>';

/**
 * 读取特定长度
 */
//控制读取位置和长度
$fileContent=file_get_contents($fileName,null,null,4,4);
echo $fileContent.'<br/>---------------2---------------<br/>';


/**
 * 读取一行
 */
//同时提供类似C语言的文件操作方式，
$fp=fopen($fileName,'rb');
//打印文件句柄或指针
var_dump($fp);

while(!feof($fp)){
    echo fgets($fp).'<br/>---------------*---------------<br/>';//读取一行
}
fclose($fp);

/**
 * 读取特定长度
 */
$fp=fopen($fileName,'rb');
$contents='';
while(!feof($fp)){
    $contents.=fread($fp,4096);
}
//使用fopen打开的文件，最好使用fclose关闭文件指针，以避免文件句柄被占用。
fclose($fp);