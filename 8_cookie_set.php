<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 */

/*
 *setcookie具有7个可选参数，我们常用到的为前5个：
 *name（ Cookie名）可以通过$_COOKIE['name'] 进行访问
 *value（Cookie的值）
 *expire（过期时间）Unix时间戳格式，默认为0，表示浏览器关闭即失效
 *path（有效路径）如果路径设置为'/'，则整个网站都有效
 *domain（有效域）默认整个域名都有效，如果设置了'www.imooc.com',则只在www子域中有效
 */
$value='test';
//设置cookie的name
setcookie('TestCookie',$value);
//设置过期时间
setcookie('TestCookie','test',time()+3600);
//设置路径和域
$TestCookie=setcookie('TestCookie',$value,time()+3600,'/path/','imooc.com');


//cookie使用过http标头设置的，故可以直接用header()方法设置
//header('Set-Cookie:cookie_name=value');


echo($TestCookie).'<br/>';
var_dump($_COOKIE);