<?php

// 定义分隔符常量
define('DS', DIRECTORY_SEPARATOR);

// 定义根目录常量  // D:\xampps\htdocs\web\Frame
define('ROOT', dirname(__FILE__));

$query = require ROOT . DS . 'core/bootstrap.php';

// 创建路由对象
Router::load('routes.php')
    ->direct(Request::uri(), Request::method());






