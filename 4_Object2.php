<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 */
class A{
    public $name='hi';

    //使用关键字clone对象时，此方法被调用
    function __clone(){
        $obj=new A();
        $obj->name=$this->name;
    }
}

$obj1=new A();
$obj2=new A();

//判断对象属性是否相等，用比较运算符==
$equalsA=$obj1==$obj2;
var_dump($equalsA);

//判断变量是否为同一引用时，用全等运算符===
$equalsA=$obj1===$obj2;
var_dump($equalsA);

//对象克隆
$obj1->name='new hi';
$obj2=clone $obj1;
var_dump($obj1);
var_dump($obj2);

//对象序列化
$str=serialize($obj1);
var_dump($str);
$obj3=unserialize($str);
var_dump($obj3);