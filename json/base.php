<?php
/**
 * Created by musk.
 * Date: 2017/6/3
 */
$arr=array(
    'id'=>1,
    'name'=>'jack'
);

$data='输出数据';
$newData=iconv('UTF-8','GBK',$data);

//此方法只能接受UTF-8格式，其他各式会返回null
echo json_encode($newData);