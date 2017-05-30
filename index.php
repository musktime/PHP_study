<?php
/**
 * Created by musk.
 * date: 2017/5/29
 */
include('./ApkParser.php');
//服务器端如何验证客户端身份???

//准备APK
$muskPath = './musk/';
$resourcePath = './resource/';
$flagPath = './flags/';
$fileName = 'RippleView.apk';
$absolutePath = $muskPath . $fileName;

//获得APK解析对象
$apkParser = new ApkParser();
$resource = $apkParser->open($absolutePath);

//获得APK文件信息
$apkName = $apkParser->getAppName();
$apkPkg = $apkParser->getPackage();
$apkMD5 = md5_file($absolutePath);
$apkFileName = md5($absolutePath);
$apkVer = $apkParser->getVersionName();

if (!is_dir($flagPath)) {
    mkdir($flagPath);
}

//根据标记文件防止重复操作
$flag_copy = 'flag_copy';
if (!file_exists($flagPath . $flag_copy)) {
    if (copy($muskPath . $fileName, $resourcePath . $fileName)) {
        fopen($flagPath . $flag_copy, 'w+');
    }
}

//如果标记存在不重命名
$flag_rename = 'flag_rename';
if (!file_exists($flagPath . $flag_rename)) {
    //重命名文件
    if (rename($resourcePath . $fileName, $resourcePath . $apkFileName)) {
        fopen($flagPath . $flag_rename, 'w+');
    }
}

//---------------------test url start-------------------------
$url = 'http://192.168.31.191/index.php?uid=adffasfdal&pid=4389384&imei=43984923&os=19';
$arr = parse_url($url);
var_dump($arr);
$arr_query = convertUrlQuery($arr['query']);
var_dump($arr_query);


function convertUrlQuery($query)
{
    $quryparts = explode('&', $query);
    $params = array();
    foreach ($quryparts as $param) {
        $item = explode('=', $param);
        $params[$item[0]] = $item[1];
    }
    return $params;
}

//---------------------test url end-------------------------

//--------------------获取局域网IP start------------------
$host_name = exec("hostname");
$host_ip = gethostbyname($host_name); //获取本机的局域网IP
echo $host_ip;
echo $host_name;
//--------------------获取局域网IP end---------------------


$bool=is_dir('./resource/');
var_dump($bool);

//构造客户端JSon数据
$arraySource = array("url" => "http://$host_ip/resource/$apkFileName", "md5" => "$apkMD5", "version" => "$apkVer");
$jsonData = json_encode($arraySource);
echo $jsonData;
?>