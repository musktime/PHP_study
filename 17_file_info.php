<?php
/**
 * Created by musk.
 * Date: 2017/5/29
 */
$fileName='./resource/data.config';

echo '文件所有者：'.fileowner($fileName);
echo '<br/>创建时间：'.date('Y-m-d H:i:s',filectime($fileName));
$mTime=filemtime($fileName);
echo '<br/>修改时间：'.date('Y-m-d H:i:s',$mTime);
echo '<br/>最后访问时间'.date('Y-m-d H:i:s',fileatime($fileName));

echo '<br/>now:'.date('Y-m-d H:i:s',time());
if($mTime-time()>360){
    echo '<br/>缓存已经过期';
}else{
    echo '<br/>'.file_get_contents($fileName);
}