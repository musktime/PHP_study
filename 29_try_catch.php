<?php
/**
 * Created by musk.
 * Date: 2017/6/1
 */
try{
    if(!file_exists('test.txt')){
        throw new Exception('文件不存在！');
    }
}catch (Exception $e){
    echo $e->getMessage();
}