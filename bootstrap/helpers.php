<?php

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
