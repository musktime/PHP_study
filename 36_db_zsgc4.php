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
//limit n,m表示从第n行开始取m条数据
$sql='select * from user limit 0,3';
//获得资源句柄
$result=mysqli_query($conn,$sql);

/**
 * 获取数据集中的一行
 */
//获得关联数据【键为串】
//MYSQL_ASSOC表关联，MYSQLI_NUM表索引
$row=mysqli_fetch_array($result,MYSQLI_NUM);
var_dump($row);

$row=mysqli_fetch_array($result);
var_dump($row);

//获得索引数组【键为数字】
$row=mysqli_fetch_row($result);
var_dump($row);



echo '-------------------------------------<br/>';
//获取数据集中所有数据
$data=array();
while($row=mysqli_fetch_array($result)){
    $data=$row;
    var_dump($data);
}

//关闭
mysqli_close($conn);