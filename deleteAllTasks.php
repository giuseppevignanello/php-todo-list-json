<?php

//take the json file with the task
$tasks_string = file_get_contents('tasks.json');
//decode the json file 
$tasks = json_decode($tasks_string, true);

//empty the array
$tasks = [];

//encode the array in a json file 
$new_tasks_string = json_encode($tasks);

file_put_contents('tasks.json', $new_tasks_string);


header('Content-Type: application/json');
echo json_encode($new_tasks_string);
