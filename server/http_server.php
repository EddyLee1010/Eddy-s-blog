<?php
/**
 * Created by PhpStorm.
 * @auth:Eddy
 * @527084800@qq.com
 * Date: 2018/3/30 0030
 */
$http = new swoole_http_server("0.0.0.0", 8811);

$http->set(
    [
        'enable_static_handler' => true,
        'document_root' => "/usr/share/nginx/html/blog/public/static",
        "worker_num" => 4,
    ]
);

$http->on('WorkerStart',function (swoole_server $server, $worker_id){
    require __DIR__ . '/../thinkphp/base.php';


});
$http->on('request', function ($request, $response) {


});

$http->start();