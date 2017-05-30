<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 */
$fileName='./resource/data.config';

//file_exists不仅能判断文件，还能判断目录是否存在
if(file_exists($fileName)){
    echo file_get_contents($fileName).'<br/>';
}

//is_file判断目录是否包含文件
if(is_file($fileName)){
    echo '包含文件<br/>';
}

//判断文件可读，可写属性
if(is_writable($fileName)){
    echo '可读<br/>';
}
if(is_readable($fileName)){
    echo '可写<br/>';
}