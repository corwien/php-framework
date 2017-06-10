<?php

require 'Task.php';
$query = require 'bootstrap.php';


$tasks = $query->selectAll('tasks', 'Task');

dump($tasks);


