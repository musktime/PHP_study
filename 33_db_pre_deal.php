<?php
/**
 * Created by musk.
 * Date: 2017/6/2
 */
//使用常量定义数据库访问参数
define('HOST','127.0.0.1');
define('USER','root');
define('PWD','password');
define('DB','mydb');

//对象方式连接数据库
$mysqli=new mysqli(HOST,USER,PWD,DB);
if($mysqli->connect_error){
    die('连接失败，原因是：'+$mysqli->connect_error);
}

//预处理
$stmt=$mysqli->prepare("INSERT INTO user(name,work,des)VALUES(?,?,?)");
$stmt->bind_param("sss",$name,$work,$des);

//设置参数开始执行
$name='musk';
$work='db_config';
$des='control access to db';
$stmt->execute();

//设置参数开始执行
$name='elon';
$work='db_operate';
$des='operate db';
$stmt->execute();

//设置参数
$name='tony';
$work='db_close';
$des='shutdown the db';
$stmt->execute();

echo '记录插入成功';

$stmt->close();
$mysqli->close();
