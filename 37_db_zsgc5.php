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

/**
 * 通过limit分页
 */

$pageIndex=1;//假设当前为第二页
$pageSize=2;//每页最多n条数据
$start=($pageIndex-1)*$pageSize;//从第m行开始
$sql='select * from user limit $start,$pageSize';
$result=mysqli_query($conn,$sql);

//读取当前页数据
while ($row=mysqli_fetch_assoc($result)){
    var_dump($row);
}

//关闭
mysqli_close($conn);