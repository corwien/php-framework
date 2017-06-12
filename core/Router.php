<?php

class Router
{
    protected $routes = [
        'GET'   => [],
        'POST'  => []
    ];

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    // 当定义POST路由时候，把对应的$uri和$controller以健值对的形式保存在$this->routes['POST']数组中
    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }


    /**
     * 赋值路由关联数组
     * @param $routes
     */
    public function define($routes)
    {
        $this->routes = $routes;
    }

    /**
     * 分配控制器路径
     * 通过用户输入的 uri 返回对应的控制器类的路径
     * @param $uri
     * 这里的 $requestType 是请求方式，GET 或者是 POST
     * 通过请求方式和 $uri 查询对应请求方式的数组中是否定义了路由
     * 如果定义了，则返回对应的值，没有定义则抛出异常。
     * @return mixed
     * @throws \Exception
     */
    public function direct($uri, $requestType)
    {
        if(array_key_exists($uri, $this->routes[$requestType]))
        {
            return $this->callAction(
                ...explode('@', $this->routes[$requestType][$uri]));
        }

       // 不存在，抛出异常，以后关于异常的可以自己定义一些，比如404异常，可以使用NotFoundException
        throw new Exception('No route defined for this URI');
    }

    public static function load($file)
    {
        $router = new static;

        // 调用 $router->define([]);
        require ROOT . DS . $file;

        // 注意这里，静态方法中没有 $this 变量，不能 return $this;
        return $router;
    }


    /**
     * 调用控制器方法
     * @param $controller
     * @param $action
     *
     * @return mixed
     * @throws \Exception
     */
    private function callAction($controller, $action)
    {
        $controllerObj = new $controller;

        // 判断方法是否存在
        if(!method_exists($controllerObj, $action))
        {
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        return $controllerObj->$action();

    }



}
