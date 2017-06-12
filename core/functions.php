<?php

/**
 * 打印输出
 * @param $data
 */
function dump($data)
{
    echo '<pre>';
    var_export($data);
    echo '</pre>';
}

if(!function_exists('view'))
{
    /**
     * 引入视图文件
     * @param $name
     *
     * @return mixed
     */
    function view($name, $data = [])
    {
        $name = trim($name, '/');
        extract($data);
        return require "views/{$name}.view.php";
    }

}

function redirect($path = '')
{
    header("Location: /{$path}");
}


