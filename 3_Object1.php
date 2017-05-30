<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 */
class A{

    //属性必须定义访问控制符
    private $arr=array();

    //魔术方法 start
    function __get($key){
        if(isset($this->arr[$key])){
            return $this->arr[$key];
        }
        return null;
    }

    function __set($key, $value){
        $this->arr[$key]=$value;
    }

    function __isset($key){
        if(isset($this->arr[$key])){
            return true;
        }
        return false;
    }

    function __construct(){
        print '<br/>构造函数被调用~';
    }
    function __destruct(){
        print '<br/>析构函数被调用';
    }
    //魔术方法 end

    //自定义方法，方法默认为public
    function Hi(){
        echo '<br/>This is Hi';
    }
    public function say(){
        return '<br/>This is say';
    }
    public static function hello(){
        return '<br/>static A<br/><br/>';
    }
    //自定义方法 end
    /**
     * --------------------------<重载方式一>-----------------------------
     * 使用func_get_args()和func_num_args()方法
     */
    function test1($name){
        echo $name.'<br/>';
    }

    function test2($name,$age){
        echo $name.':'.$age.'<br/>';
    }

    function load(){
        //得到输入参数个数
        $num=func_num_args();
        //得到输入参数的数组形式
        $arr=func_get_args();
        if($num==1){
            $this->test1($arr[0]);
        }else{
            $this->test2($arr[0],$arr[1]);
        }
    }

    /**
     * --------------------------<重载方式二>-----------------------------
     * 对象试着调用不存在或者受权限限制的方法时，__call()方法会被自动调用
     */
    function __call($name, $args){
        echo '<br/>methodName:'.$name.'<br/>';
        $num=count($args);
        if($num==1){
            $this->test1($args[0]);
        }else{
            $this->test2($args[0],$args[1]);
        }
    }
    //方法重载 end
}

$a=new A;
$str='A';
$a=new $str();
//if(empty($a)){
//
//}
echo $a->say();
$a->Hi();
echo A::hello();

//重载一:方法名固定
$a->load('Musk');
$a->load('Musk',18);
//重载二:方法名随意
$a->abc('Time');
$a->xyz('Time',19);
unset($a);