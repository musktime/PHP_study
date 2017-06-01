<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 */
//对象方式创建连接------方式一
$mysqli=new mysqli('127.0.0.1','root','password','test');
//只能用函数来判断是否连接成功
if(mysqli_errno($mysqli)){
    echo mysqli_connect_error();
}


//对象方式创建连接------方式二
$mysqli=mysqli_init();
$mysqli->options(MYSQLI_OPT_CONNECT_TIMEOUT,2);
$mysqli->real_connect('127.0.0.1','root','password','test');

/**
 * shell建库test建表user
 */
//增
$sql="insert into user(id,name,work) values(2,'tom','touch')";
//删
//$sql='delete from user where(id=2)';
//改
$sql="update user set name='tony',work='check' where(id=2)";
//查
//$sql="select * from user";
$rst=$mysqli->query($sql);
var_dump($rst);