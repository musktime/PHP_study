<?php

/**
 * Created by musk.
 * Date: 2017/6/3
 */
class Response{

    /**
     * 输出JSon格式数据
     * @param $code　状态码
     * @param $message 提示信息
     * @param array $data 数据
     */
    public static function json($code,$message,$data=array()){
        if(!is_numeric($code)){
            return '';
        }
        $result=array(
            'code'=>$code,
            'message'=>$message,
            'data'=>$data
        );
        echo json_encode($result);
        exit;
    }
    /**
     * 输出xml格式数据
     * @param $code　状态码
     * @param $message 提示信息
     * @param array $data 数据
     */
    public static function xmlEncode($code,$message,$data=array()){
        if(!is_numeric($code)){
            return '';
        }
        $result=array(
            'code'=>$code,
            'message'=>$message,
            'data'=>$data
        );
        header("Content-Type:text/xml");
        $xml="<?xml version='1.0' encoding='UTF-8'?>\n";
        $xml.="<root>\n";
        $xml.=self::xmlToEncode($result);
        $xml.="</root>";
        echo $xml;
    }

    public static function xmlToEncode($data){
        $xml="";
//        var_dump($data);
//        foreach ($data as $key=>$value){
//            $xml.="<$key>\n";
//            $xml.=$value;
//            $xml.="</$key>\n";
//        }
        return $xml;
    }

    public static function xml(){
        header("Content-Type:text/xml");
        $xml="<?xml version='1.0' encoding='UTF-8'?>\n";
        $xml.="<root>\n";
        $xml.="<code>200</code>\n";
        $xml.="<messsage>success</messsage>\n";
        $xml.="<data>\n";
        $xml.="<id>1</id>\n";
        $xml.="<name>jack</name>\n";
        $xml.="</data>\n";
        $xml.="</root>";
        echo $xml;
    }
}
$data=array(
    'id'=>1,
    'name'=>'jack'
);
var_dump($data);
Response::xmlEncode(200,'success',$data);