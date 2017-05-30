<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 * session可以存储多种数据类型，且存储在服务器端安全性较高，故用途很多，常用于登录信息购物车数据
 * cookie只能存储字符串型数据，存储于客户端浏览器，对于安全性要求高的数据需要格式化和加密存储
 */
session_start();
//假设用户登录成功后可以获得以下信息
$userInfo=array(
    'uid'=>10086,
    'name'=>'musk',
    'email'=>'musk@yeah.net',
    'sex'=>'male',
    'age'=>20
);
header("content-type:text/html;charset=utf-8");

/*
 * 将用户信息保存到session中
*/
$_SESSION['uid']=$userInfo['uid'];
$_SESSION['name']=$userInfo['name'];
$_SESSION['email']=$userInfo['email'];
$_SESSION['sex']=$userInfo['sex'];
$_SESSION['age']=$userInfo['age'];

/*
 *将用户数据保存到cookie的简单方法
 */
//加密秘钥
$secureKey='musk';
//数据序列化
$str=serialize($userInfo);
//用户信息加密前
$str=base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,md5($secureKey),$str,MCRYPT_MODE_ECB));
//用户信息加密后，存储到cookie
setcookie('userinfo',$str);

//当需要使用时解密
$str=mcrypt_decrypt(MCRYPT_RIJNDAEL_256,md5($secureKey),base64_decode($str),MCRYPT_MODE_ECB);
$uInfo=unserialize($str);

echo '解密后的信息：<br/>';
print_r($uInfo);