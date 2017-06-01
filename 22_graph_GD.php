<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 * 注意：php.ini配置文件打开依赖库，才能使用GD库函数
 */

//取得当前安装的 GD 库的信息
$arr=gd_info();
var_dump($arr);
?>