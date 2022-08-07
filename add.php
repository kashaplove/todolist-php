<?php
$task = $_POST['name'];

if ($task == '') {
    echo 'Введите название таска!';
    exit();
}

require 'configDB.php';


$sql = "INSERT INTO tasks (title) VALUES (:task)";
$query = $pdo->prepare($sql);
$query->execute(['task' => $task]);

header('Location: /');