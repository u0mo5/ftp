<?php

/**
 *  QueryList使用示例
 *  
 * 入门教程:http://doc.querylist.cc/site/index/doc/4
 * 
 * QueryList::Query(采集的目标页面,采集规则[,区域选择器][，输出编码][，输入编码][，是否移除头部])
* //采集规则
* $rules = array(
*   '规则名' => array('jQuery选择器','要采集的属性'[,"标签过滤列表"][,"回调函数"]),
*   '规则名2' => array('jQuery选择器','要采集的属性'[,"标签过滤列表"][,"回调函数"]),
*    ..........
*    [,"callback"=>"全局回调函数"]
* );
 */
set_time_limit(0);
header("Content-Type: text/html;charset=UTF-8"); 
require '/data/www/img.bookfuns.com/spy/vendor/autoload.php';
include_once('connect.php');//连接数据库
use QL\QueryList;
use U0mo5\Tools\Webs\CurlRequest;

function fetch($url){
$curl=new U0mo5\Tools\Webs\CurlRequest;
$out=$curl->timeout(0);
$out = $curl->url($url);
 $out=$curl->get();
//  echo $out['data'];
return ($out['data']);
}


function httpcopy($url, $file="", $timeout=60) {
    
  $file = empty($file) ? pathinfo($url,PATHINFO_BASENAME) : $file;
  $file ="/data/www/img.bookfuns.com/data/nfs/albums/spy/".$file;
  $dir = pathinfo($file,PATHINFO_DIRNAME);
  !is_dir($dir) && @mkdir($dir,0755,true);
  $url = str_replace(" ","%20",$url);
  
  if(function_exists('curl_init')) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    $temp = curl_exec($ch);
    if(@file_put_contents($file, $temp) && !curl_error($ch)) {
      return $file;
    } else {
      return false;
    }
  } else {
    $opts = array(
      "http"=>array(
      "method"=>"GET",
      "header"=>"",
      "timeout"=>$timeout)
    );
    $context = stream_context_create($opts);
    if(@copy($url, $file, $context)) {
      //$http_response_header
      return $file;
    } else {
      return false;
    }
  }
}



// //采集mm图片
// for($i=0;$i<=20;$i++){
//      $json_str=fetch("http://image.baidu.com/channel/listjson?pn=$i&rn=500&tag1=%E7%BE%8E%E5%A5%B3&tag2=%E5%85%A8%E9%83%A8&ftags=%E6%A0%A1%E8%8A%B1&ie=utf8");
//  //echo $json_str;
// $json_obj=json_decode($json_str,true);
// // echo json_encode($json_obj['data']);
//         $ii=0;
//         foreach ($json_obj['data'] as $v) {
//             // code...
//         $ii++;
//         echo $i.":".$ii.":".httpcopy($v['download_url'])."<br>";
//         }
// }





// exit;


//采集cnbeta

    $html='http://www.dytt8.net/index.htm';
    $rule=array(
    'title' => array('td>a:nth-child(2)','text'),
    'url' => array('td>a:nth-child(2)','href'),
    'img' => array('.item>.hd>.picno>.pic>a>img','src')
    );
    $data = QueryList::Query($html,$rule,'','UTF-8','GB2312',true)->data;
//打印结果
foreach($data as $v){
echo $title=$v['title']; 
echo "    :    ";
echo $url="http://www.dytt8.net".$v['url'];
$datetime=time();
echo "    :    ";
$sql="insert into `yf_movie` (title,url) values ('$title','$url')";
	$query = mysql_query($sql);
	if(mysql_insert_id()>0){
		echo $sql.'写入成功';
	}else{
		echo $sql.'写入失败！';
	}
echo "<br>";    
}

/*************************************************/

//使用插件
$urls = QueryList::run('Request',array(
        'target' => 'http://cms.querylist.cc/news/list_2.html',
        'referrer'=>'http://cms.querylist.cc',
        'method' => 'GET',
        'params' => ['var1' => 'testvalue', 'var2' => 'somevalue'],
        'user_agent'=>'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:21.0) Gecko/20100101 Firefox/21.0',
        'cookiePath' => './cookie.txt',
        'timeout' =>'30'
    ))->setQuery(array('link' => array('h2>a','href','',function($content){
    //利用回调函数补全相对链接
    $baseUrl = 'http://cms.querylist.cc';
    return $baseUrl.$content;
})),'.cate_list li')->getData(function($item){
    return $item['link'];
});

// print_r($urls);
