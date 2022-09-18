<?php

/**
 * 将文件地址转为绝对地址
 * @param $url
 * @return string 结果数据
 */
function fileUrlToWebUrl ($url) {
    // 已经为绝对地址不处理
    if (strpos($url, 'http') === 0)
        return $url;

    if (strpos($url, '/') === 0) {
        $url = substr($url, 1);
    }

    // Dcat_admin 后台上传地址
    $uploadFiles = ['files/','images/'];
    $isDir = false;
    foreach ($uploadFiles as $v){
        if (strpos($url, $v) !== false && strpos($url, 'storage/') !== 0){
            $isDir = true;
            break;
        }
    }
    if ($isDir) {
        $app_env = config('app.env');
        if ($app_env === 'local')
            return config('app.url') . '/storage/' . $url;
        // 测试环境 env 参数
        if ($app_env === 'lj')
            return config('app.url') . '/storage/' . $url;
        return '' . $url;
    }

    // 自定义上传接口地址
    if (strpos($url, 'storage/') !== false) {
        $app_env = config('app.env');
        if ($app_env === 'local')
            return config('app.url') . '/' . $url;
        // 测试环境 env 参数
        if ($app_env === 'lj')
            return config('app.url') . '/' . $url;
        return '' . $url;
    }

    return $url;
}

/**
 * 去除url前缀域名
 * @param $url
 * @return string 结果数据
 */
function delWebPrefixUrl($url) {
    $app_url = config('app.url');

    // 已去除前缀不处理
    if (strpos($url, $app_url) === false)
        return $url;

    // 目前只处理 laravel 目录文件
    if (strpos($url, 'storage/') !== false)
        return str_replace($app_url.'/', '', $url);

    // Dcat_admin 后台上传地址
//    $uploadFiles = ['storage/files/','storage/images/','storage/video/','storage/audio/'];
//    $isDir = false;
//    foreach ($uploadFiles as $v){
//        if (strpos($url, $v) !== false){
//            $isDir = true;
//            break;
//        }
//    }
//    if ($isDir) {
//        // 已去除前缀不处理
//        if (strpos($url, $app_url) !== false){
//            return str_replace($app_url.'/storage/', '', $url);
//        }
//    }
    return $url;
}
