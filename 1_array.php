<?php
/**
 * Created by musk.
 * date: 2017/5/29
 */
//空数组
$arr=array();
print_r($arr);
$arr=array('菠萝');
$arr=array('0'=>'菠萝');
echo '<br>';
print_r($arr);

//索引数组[键是整数]
$arrInt=array('苹果','香蕉','橘子','梨');
//关联数组[键是字符串]
$arrStr=array('item0'=>'小米','item1'=>'华为','item2'=>'魅族','item3'=>'三星');

for ($i=0;$i<3;$i++){
    echo  '<br>数组第'.$i.'的值四'.$arrInt[$i];
}

foreach ($arrStr as $k=>$v){
    echo '<br>第'.$k.'的值是'.$v;
}
print_r('<br>'.$arrInt['0']);
print_r('<br>'.$arrInt[1]);
