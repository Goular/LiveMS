<?php

// 这个仅仅是简单配置，我们最后还是会使用composer的库来帮忙做好这个内容
$http = new swoole_http_server("0.0.0.0", 8811);

$http->set([
    'enable_static_handler' => true,
    // 静态资源目录
    'document_root' => "/home/public/static"
]);

$http->on("request", function ($request, $response) {
    //$response->cookie("")
    //$response->end()
});
// 开始服务
$http->start();