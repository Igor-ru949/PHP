<?php
  $task = $_POST['task'];
  if($task == '') {
    echo "Введите само задание";
    exit();
  }

require 'DB.php';

  $sql = 'INSERT INTO tasks(task) VALUES(:task)';
  $query = $pdo->prepare($sql);
  $query -> execute(['task'=> $task]);

  header('Location: /');
 ?>
