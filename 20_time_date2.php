<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 * UNIX 时间戳[timestamp]．PHP 表示从1970年1月1日 00:00:00 到当前时间的秒数之和
 * 内置函数strtotime实现功能：获取某个日期或时间的时间戳
 */

$dateToTimeStamp=strtotime('2017-05-30 00:00:01');
//英文单词now直接等于现在的日期和时间<=>time()
$dateToTimeStamp=strtotime('now');
echo $dateToTimeStamp.'<br/>';
//相当于将现在的日期和时间加上了1秒，并把这个日期时间转化为unix时间戳。这个效果跟echo time()+1;一样。
echo strtotime("+1 seconds").'<br/>';
//相当于将现在的日期和时间加上了1天。
echo strtotime("+1 day").'<br/>';
//相当于将现在的日期和时间加上了1周。
echo strtotime("+1 week").'<br/>';
//相当于将现在的日期和时间加上了1周3天7小时5秒。
echo strtotime("+1 week 3 days 7 hours 5 seconds").'<br/>';