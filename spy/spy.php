<?php


$curl = curl_init();
$cookie_jar = tempnam('./tmp','cookie');
curl_setopt($curl, CURLOPT_URL,'http://b2b.bookuu.com/b2b_club/checkUser.jsp');//这里写上处理登录的界面
curl_setopt($curl, CURLOPT_POST, 1);
$request = 'user=xxx&password=xxx';
curl_setopt($curl, CURLOPT_POSTFIELDS, $request);//传 递数据
curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie_jar);// 把返回来的cookie信息保存在$cookie_jar文件中
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//设定返回 的数据是否自动显示
curl_setopt($curl, CURLOPT_HEADER, false);//设定是否显示头信 息
curl_setopt($curl, CURLOPT_NOBODY, false);//设定是否输出页面 内容
curl_exec($curl);//返回结果
curl_close($curl); //关闭
 
$curl2 = curl_init();
curl_setopt($curl2, CURLOPT_URL, 'http://b2b.bookuu.com/search/b2b_zxsm_new.jsp');//登陆后要从哪个页面获取信息
curl_setopt($curl2, CURLOPT_HEADER, false);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl2, CURLOPT_COOKIEFILE, $cookie_jar);
$content = curl_exec($curl2);
