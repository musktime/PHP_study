<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 * 日期和时间之格式化格林威治（GMT）标准时
 */

echo date('Y-m-d H:i:s',time()).'<br/>';
//格林威治时间
echo gmdate('Y-m-d H:i:s',time()).'<br/>';