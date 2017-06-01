<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 */
$fileName='./resource/data.config';

$size=filesize($fileName);
echo 'size:'.$size;

function getFileSize($size,$format='kb'){
    $p=0;
    if($format=='kb'){
        $p=1;
    }elseif($format=='mb'){
        $p=2;
    }elseif($format=='gb'){
        $p=3;
    }
    $size/=pow(1024,$p);
    return number_format($p,3);
}

echo '<br/>size:'.getFileSize($size,'mb').'mb';