<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 * 使用unset删除session
 */

session_start();

$_SESSION['name']='musk';
var_dump($_SESSION);

unset($_SESSION['name']);
var_dump($_SESSION);

//全部删除
session_destroy();