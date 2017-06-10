<?php
/**
 * Created by musk.
 * Date: 2017/6/2
 */
//定义连接参数
define('HOST','127.0.0.1');
define('USER','root');
define('PASSWORD','password');
define('DB','mysql');
//对象方式连接
$mysqli=new mysqli(HOST,USER,PASSWORD,DB);

if($mysqli->connect_error){
    die("数据库连接错误，原因是："+$sqli->connect_error);
}

//update user set password=password("musktime1234")where user="root";flush privileges;
//修改root密码，刷新权限一起操作会出语法错误
$sqlString="update `user` set `password`=password('musktime')where `user`='root'";
var_dump($mysqli->query($sqlString,MYSQLI_STORE_RESULT));

//刷新系统权限的相关表，否则重启后新密码才能生效
$sqlString="flush PRIVILEGES;";
var_dump($mysqli->query("flush PRIVILEGES;",MYSQLI_STORE_RESULT));

$mysqli->close();
echo '密码修改成功！';