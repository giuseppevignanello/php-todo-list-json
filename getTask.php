<?php

//take the json file with the task
$tasks_string = file_get_contents('tasks.json');

//decode the json file 
$tasks = json_decode($tasks_string, true);

header('Content-Type: application/json');
echo $tasks_string;
