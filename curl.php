<?php

    header("Content-Type:text/html; charset=utf-8");

    $url = 'https://zuli.tech/contact';
    $ch = curl_init();    //初始化
    $timeout = 30;
    $useragent="Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";
    $cookie = "cookieLangId=zh_tw;";

    curl_setopt ($ch, CURLOPT_URL, $url);  //設定抓取網址
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);  //逾時時間
    curl_setopt ($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt ($ch, CURLOPT_COOKIE, $cookie);

    if(curl_exec($ch) === false)
    {
        echo 'Curl-Fehler: ' . curl_error($ch);
    }
    else
    {
        $data = curl_exec($ch);  //抓取網頁

        preg_match_all('|<p class="text-center">(.*)</p>|', $data, $match);

        print($match[0][0]);
    }

    curl_close($ch);

?>