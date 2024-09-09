<?php
    $string = file_get_contents('todo-list.json');
    $todoList = json_decode($string);

    header('Content-type: application/json');
    echo json_encode($todoList);
?>