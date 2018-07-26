# PHP Curl

開發環境@USBWebserver v8.6

[Client URL Library](https://secure.php.net/manual/en/book.curl.php)

PHP Curl 可取得特定頁面的資訊，再配合 preg_match_all() 以 Regular Expression 擷取指定格式資料。

## User Agent

避免讀取目標網頁時發生問題。

## SSL ceritificate problem 解法

1. 碰到 SSL 錯誤時，要下載最新的 cacert.pem 檔案 http://curl.haxx.se/docs/caextract.html
2. 置於 `\USBWebserver v8.6\php\` 並修改 `php.ini` 在文件最末端加上

```php.ini
[curl]
curl.cainfo="D:\USBWebserver v8.6\php\cacert.pem"
```

> **注意一定要用絕對路徑

3. 重啟 server 即可