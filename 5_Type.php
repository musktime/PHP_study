<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 */

//字符块
$hello=<<<tag
Hello World!
tag;
echo $hello.'<br/>';

//去空格
echo trim(" 空格 ")."<br>";
echo rtrim(" 空格 ")."<br>";
echo ltrim(" 空格 ")."<br>";

//字符长度
//strlen擅长计算英文串长度
echo strlen($hello).'<br/>';

//中文串计算，编码一般用UTF8
echo mb_strlen('今天是何年何月','UTF8')."<br>";

//截取串
echo substr('hello world',6,5)."<br>";
echo mb_substr('何年何月',2,1)."<br>";
echo strpos('hello','lo').'<br/>';

//串替换
echo str_replace('php','Java','php是最好的语言').'<br/>';

//串格式化
echo sprintf('%07.2f','665.65432').'<br/>';

//串合并和分割
$arr=array('牛头','马尾');
$combine=implode($arr);
echo $combine;
$parts=explode('o','hello world');
var_dump($parts);

//串转义
echo addslashes("What's this?").'<br/>';
echo 'What\'s this?';

//正则匹配
$match=preg_match('/apple/','apple is a fruit');
var_dump(boolval($match));

/*
 * 正则表达式=分隔符+元字符
 * 分割符是非数字、非反斜线、非空格，常用的是正斜线(/)、hash符号(#) 以及取反符号(~)
 */
$p = 'http://';
$p = '/'.preg_quote($p, '/').'/';
echo $p;

//分隔符后面可使用模式修饰符[i,m,s,x等]i表示忽略大小写
$str='Http://www.imooc.com/';
if(preg_match('/http/i',$str)){
    echo '匹配成功'.'<br/>';
}