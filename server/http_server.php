<?php
/**
 * Created by PhpStorm.
 * User: baidu
 * Date: 18/2/28
 * Time: 上午1:39
 */
$http = new swoole_http_server("0.0.0.0", 8811);

$http->set(
    [
        'enable_static_handler' => true,
        'document_root' =>"/usr/share/nginx/html/Eddy-s-blog/public/static",
    ]
);
$http->on('request', function($request, $response) {

});

$http->start();