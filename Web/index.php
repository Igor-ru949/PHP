<!DOCTYPE html>

<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <title>Список дел </title>
</head>
    <body>
      <div class="container">
        <h2>Список дел</h2>
        <form action="/add.php" method="post">
          <input type="text" name="task" id="task" placeholder="Нужно сделать.." class="form-control">
          <button type="submit" name="SendTask" class="btn btn-success">Отправить</button>
        </form>

        <?php
        require 'DB.php';
        echo '<ul>';
        $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
        while($row = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>'.$row->task.'</b><a href="/delete.php?id='.$row->id.'"><button>Удалить</button></a></li>';
        }
        echo "</ul>";
         ?>

      </div>
    </body>
  </html>
