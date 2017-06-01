<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 * time/date format
 */

//设置区时
date_default_timezone_set('Asia/Shanghai');

$time=time();
echo $time.'<br/>';
echo date('Y-m-d').'<br/>';

//大写H输出24小时制，小写12小时制
echo date('Y-m-d H:m:sA',$time).'<br/>';
echo date('y-m-d h:m:sa',$time).'<br/>';
echo date('l').'<br/>';