<?php

class PagesController
{
    public function home()
    {
        $tasks = App::get('database')->selectAll('tasks', 'Task');
        dump($tasks);
        require 'views/index.view.php';
    }
    public function about()
    {
        require 'views/about.view.php';
    }
    public function contact()
    {
        require 'views/contact.view.php';
    }
}

