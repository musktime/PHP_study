<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 * cookie是存储在客户端浏览器中的数据，用来跟踪和存储用户数据。
 * cookie通过HTTP headers从服务器端返回给客户端，存与http标头中，需在信息输出前设置
 * php通过setCookie设置，用全局变量$_COOKIE存储，$_COOKIE['key']可取出值
 * 用途：存储用户登录信息购物车等，使用会话Session时用于存储会话id识别用户，有效期结束后自动从客户端删除
 * cookie为安全控制可以设置域和路径
 */
setcookie('test', time());
ob_start();
print_r($_COOKIE);
$content = ob_get_contents();
$content = str_replace(" ", '&nbsp;', $content);
ob_clean();
header("content-type:text/html; charset=utf-8");
echo '当前的Cookie为：<br>';
echo nl2br($content);