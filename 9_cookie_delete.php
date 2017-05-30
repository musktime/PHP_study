<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 */

/*
 * cookie删除方式一
 * php中没有删除Cookie的函数，在PHP中删除cookie也是采用setcookie函数来实现。
 */
setcookie('test','',time()-1);

/*
 * cookie删除方式二
 * cookie是通过HTTP的标头来传递的，客户端根据服务端返回的Set-Cookie段来进行cookie的设置，
 * 如果删除cookie需要使用新的Del-Cookie来实现，则HTTP头就会变得复杂，实际上仅通过Set-Cookie
 * 就可以简单明了的实现Cookie的设置、更新与删除,了解原理以后，我们也可以直接通过header来删除cookie
 */
header("Set-Cookie:test=1393832059;expires=".gmdate('D, d M Y H:i:s \G\M\T',
        time()-1));