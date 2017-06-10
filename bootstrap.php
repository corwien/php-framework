<?php

require 'database/Connection.php';
require 'database/QueryBuilder.php';
require "functions.php";

// 获取配置
$config = require 'config.php';

return  new QueryBuilder(
    Connection::make($config['database'])
);
