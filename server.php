<?php

$file= './data.json';
$fileContent = file_get_contents('./todolist.json');
$todoList = json_decode($fileContent);

//creazione nuovo todo
if (isset($_POST['newTodo'])) {
    $newTodo = [
        'text' => $_POST['newTodo'],
        'done' => false,
    ];
    array_push($todoList, $newTodo);
    file_put_contents($file, json_encode($todoList));
//check todo
} elseif (isset($_POST['checkTodo'])) {

    $item = $_POST['checkTodo'];
    if ($todoList[$item]->done == true) {
        $todoList[$item]->done = false;
    } else {
        $todoList[$item]->done = true;
    }
    file_put_contents($file, json_encode($todoList));
//eliminazione todo
} elseif (isset($_POST['removeTodo'])) {

    $item = $_POST['removeTodo'];
    array_splice($todoList, $item, 1);
    file_put_contents($file, json_encode($todoList));
} else {

    header('Content-Type: application/json');
    echo json_encode($todoList);
}

?>