<?php
$tasks_string = file_get_contents('tasks.json');
$tasks = json_decode($tasks_string, true);

header('Content-Type: application/json');
echo $tasks_string;
