<?php
require "./function.php";
addAccess();
addApiAccess(513);
require "./tj.php"; // 引入函数文件
tj(); // 调用统计访问函数

$msg=$_REQUEST["msg"];
$url=$_REQUEST["url"];
$type=$_REQUEST["type"]?:"json";

if (!isset($_REQUEST['msg'])) {
    $array = array(
        'code' => 400,
        'msg' => '请输入正确的参数'
    );
    echo json_encode($array, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    exit;
} else if (!isset($_REQUEST['url'])) {

$url = file_get_contents("https://api.lolimi.cn/API/AI/gemini.php?msg='$msg'");
$url = json_decode($url, true);
if($_REQUEST['type']=="text"){
echo $url['data']['output'];
}else{
$array = array(
        'code' => 200,
        'msg' => '获取成功',
        'data' =>[
        'image' => $url['data']['image'],
        'output' => $url['data']['output'],
        'content' =>$url['data']['content'],
        ],
        'doc' = 'GEMINI 1.0 Pro 图片解说测试',
    );
    echo json_encode($array, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}


}else{




$url = file_get_contents("https://api.lolimi.cn/API/AI/gemini.php?msg='$msg'&img='$url'");
$url = json_decode($url, true);
if($_REQUEST['type']=="text"){
echo $url['data']['output'];
}else{
$array = array(
        'code' => 200,
        'msg' => '获取成功',
        'data' =>[
        'image' => $url['data']['image'],
        'output' => $url['data']['output'],
        'content' =>$url['data']['content'],
        ],
        'doc' => 'GEMINI 1.0 Pro 测试',
    );
    echo json_encode($array, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
}}
