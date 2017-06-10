<?php

return [
    'database' => [
        'name'          => 'php-framework',
        'username'      => 'homestead',
        'password'      => 'secret',
        'connection'    => 'mysql:host=127.0.0.1',
        'options'       => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION] // 这个一会再说它的作用
    ]
];
