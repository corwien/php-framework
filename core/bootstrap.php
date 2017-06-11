<?php

$app = [];

// 获取配置
$app['config'] = require ROOT . DS . 'config.php';

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require 'functions.php';
require 'Router.php';
require 'Request.php';

$app['database'] =   new QueryBuilder(
    Connection::make($app['config']['database'])
);
