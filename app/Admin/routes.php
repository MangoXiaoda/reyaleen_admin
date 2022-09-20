<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    // 模板
    $router->resource('template_category/list', 'Template\AdvantagesCategoryController');
    $router->resource('template/list', 'Template\AdvantagesController');

    // 产品
    $router->resource('adults_product/list', 'Product\AdultsProductController');

});
