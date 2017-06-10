<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 */
$host='localhost';
$user='root';
$pass='password';

//打开连接
$lin=mysqli_connect($host,$user,$pass);
var_dump($link).'<br>';
if(!$link){
    echo "failed!";
} else{
    echo "success!";
}

//关闭连接
mysqli_close($link);