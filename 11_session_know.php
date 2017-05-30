<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 * cookie将数据存储在客户端，建立起用户与服务器之间的联系，但
 * 单个cookie的值最大只能存储4k,每次请求都要进行网络传输，占用带宽
 *
 * session是将用户的会话数据存储在服务端，没有大小限制，通过一个session_id
 * 进行用户识别，PHP默认情况下session id是通过cookie来保存,也可以通过参数来实现
 */

//开始使用session
session_start();
//设置一个session
$_SESSION['test']=time();
//显示当前的session_id
echo 'session_id:'+session_id().'<br/>';

//读取session的值
echo $_SESSION['test'].'<br/>';

//销毁一个session
unset($_SESSION['test']);

var_dump($_SESSION);