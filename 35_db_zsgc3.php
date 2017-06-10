<?php
/**
 * Created by musk.
 * Date: 2017/6/2
 */
$host='127.0.0.1';
$user='root';
$password='musktime';
$database='test';

//PHP原生面向过程式连接
$conn=mysqli_connect($host,$user,$password,$database);
if(!$conn){
    die('cannot connect to database:'.mysqli_error($conn));
}

//获得主键
$uid = mysqli_insert_id($conn);

//修改表名
//$table_name_new='person';
//$sql="alter table $table_name_new rename user";
//mysqli_query($conn,$sql);

//增加一个字段【default约束用于列中插入默认值】
$sql="alter table user add column if not exists skill varchar(30) not null default 'sth'";
$result=mysqli_query($conn,$sql);

//删除一个字段
$sql="alter table user drop column if exists skill";
$result=mysqli_query($conn,$sql);

//重命名字段及类型[change old new]
//$sql="alter table user change des descript varchar(100) not null default 'empty'";
//$result=mysqli_query($conn,$sql);

if(!$result){
    echo 'error'.mysqli_error($conn);
    die("error:"+mysqli_error($conn));
}

//关闭数据库连接
mysqli_close($conn);