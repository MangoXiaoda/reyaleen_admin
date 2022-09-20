<?php
/*
 * @Description: 相关路由组
 * @Author: LiZhongDa
 * @Date: 2022/9/20 晚上20:57
 * @LastEditors: LiZhongDa
 * @LastEditTime: 2022/9/20 晚上20:57
 */

Route::group(['namespace' => 'Api'], function () {

    /**
     * 通用节流路由组
     */
    Route::middleware('throttle:' . '120,1')->group(function () {
        /**
         * 无需登录路由组
         */
        require_once base_path('routes/api/unauth.php');
        /**
         * 需登录的路由组
         */
        require_once base_path('routes/api/auth.php');
    });

    /**
     * 严格节流路由组
     */
    Route::middleware('throttle:' . '120,1')->group(function () {

    });
});
