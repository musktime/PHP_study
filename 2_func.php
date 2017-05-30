<?php
/**
 * Created by musk.
 * date: 2017/5/29
 */
/*
 * 包含文件时，方法外代码会被执行
 */
include('base3.php');
//无参空函数
function say(){
    echo '<br>Hello';
}

//带参返回值函数
function sum($a,$b){
    return $a+$b;
}
say();
echo '<br>'.sum(3,9);

//可变函数
$funSay='say';
$funSay();

//内置函数
$str='这是time的铅笔';
echo '<br>'.str_replace("time","musk",$str);

//函数是否存在
$b=function_exists($funSay);
var_dump( $b);
echo '<br>'.$funSay.'.exist:'.function_exists($funSay);
echo '<br>class A'.'.   exist:'.class_exists('A');

