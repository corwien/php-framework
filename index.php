<?php

require './models/Task.php';
$query = require './core/bootstrap.php';


$tasks = $query->selectAll('tasks', 'Task');

dump($tasks);


