<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 * 一般session以文件形式存储在服务器，当一个页面开启session将独占整个session文件
 * 导致当前用户的其他并发访问无法执行而等待，所以需要采取缓存或数据库的形式解决
 */

//session通过全局变量读写，自动编码解码，故支持任意类型，包括数据和对象等
session_start();

//写入设置
$_SESSION['test']=time();
$_SESSION['name']='musk';

//读出设置信息
var_dump($_SESSION);