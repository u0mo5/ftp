<?php
include_once("CurlRequest.php");

fetch("http://www.baidu.com");

fetch("http://www.qidian.com");

function fetch($url){
$curl=new CurlRequest();
$out=$curl->timeout(0);
$out = $curl->url($url);
$out=$curl->get();
echo ($out['data']);
echo "<hr>";
}



