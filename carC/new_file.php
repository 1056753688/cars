<?php
    $ch = curl_init();
    $url = 'http://apis.baidu.com/heweather/weather/free?city=beijing';
    $header = array(
        'apikey: 7095d607fe530bd5dc718758a4a24e97',
    );
    // 添加apikey到header
    curl_setopt($ch, CURLOPT_HTTPHEADER  , $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // 执行HTTP请求
    curl_setopt($ch , CURLOPT_URL , $url);
    $res = curl_exec($ch);
		$query=json_decode($res);
		echo "<pre/>";
    	print_r($query->{"HeWeather data service 3.0"}->aqi);
		
?>	