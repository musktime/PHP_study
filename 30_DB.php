<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 */
$host='localhost';
$user='root';
$pass='password';
$link=mysqli_connect($host,$user,$pass);
var_dump($link).'<br>';
if(!$link){
    echo "failed!";
} else{
    echo "success!";
}