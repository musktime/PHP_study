<?php
/**
 * Created by musk.
 * Date: 2017/6/2
 */
$host = '127.0.0.1';
$user = 'root';
$pass = 'musktime';
$DBname='test';

//1.面向过程式
$conn = mysqli_connect($host, $user, $pass,$DBname);
//2.面向对象式
//$conn=new mysqli($host,$user,$pass,$DBname);

//3.APO式[PDO是mysql数据库操作的一个公用类,封装了对不同数据库的同一操作]
//启用PDO和PDO支持何种数据库，需要打开扩展
//$conn=PDO("mysql:host=$host;dbname=$DBname",$user,$pass);

if (!$conn) {
    //connect fail
    die('cannot connect:' + mysqli_error());
} else {
    //connect success

    //建立数据库
    $sql="create database if not exists test";
    $result=mysqli_query($conn,$sql,MYSQLI_STORE_RESULT)or die(mysqli_error($conn));;
    var_dump($result);

    //建立数据表
    $sql='create table if not exists user(id int unsigned not null auto_increment primary key,name varchar(20),work varchar(20),des varchar(50));';
    $result=mysqli_query($conn,$sql,MYSQLI_STORE_RESULT) or die(mysqli_error($conn));
    //var_dump($result);

    //增
    $sql = "insert into user(name,work,des)values('tom','db_eheck','check sth');" or die(mysqli_error($conn));;
    $result = mysqli_query($conn, $sql, MYSQLI_STORE_RESULT) or die(mysqli_error($conn));
    var_dump($result);

    //删
//    $sql="delete from user where(id=9)";
//    $result=mysqli_query($conn,$sql,MYSQLI_STORE_RESULT)or die(mysqli_error($conn));
//    var_dump($result);

    //改
//    $sql = "update user set name='jack',work='printer',des='print sth' where id=8;";
//    $result = mysqli_query($conn, $sql, MYSQLI_STORE_RESULT) or die(mysqli_error($conn));;
//    var_dump($result);

    //获取更新过的行数
    echo mysqli_affected_rows($conn);

    //查
    $sql = "select * from user;";
    $result = mysqli_query($conn, $sql, MYSQLI_STORE_RESULT) or die(mysqli_error($conn));;
    var_dump($result);

    mysqli_close($conn);
}