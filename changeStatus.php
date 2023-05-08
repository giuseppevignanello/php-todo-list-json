<?php
$taskIndex = $_POST['taskIndex'];

//take the json file with the task
$tasks_string = file_get_contents('tasks.json');

//decode the json file 
$tasks = json_decode($tasks_string, true);

//change the status of the task
$tasks[$taskIndex]['status'] = !$tasks[$taskIndex]['status'];

//encode the array in a json file 
$new_tasks_string = json_encode($tasks);

file_put_contents('tasks.json', $new_tasks_string);

header('Content-Type: application/json');
echo $new_tasks_string;
