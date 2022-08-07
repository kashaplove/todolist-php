<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h1>Список дел</h1>
    <form action="add.php" method="post">
        <input type="text" name="name" id="name" placeholder="Нужно сделать..." class="form-control">
        <button type="submit" name="sendTask" class="btn btn-success">Сохранить</button>
    </form>


    <?php
    echo '<ul>';
        require 'configDB.php';
        $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo '<li>' . $row->title . '<a href="delete.php?id='.$row->id.'" class="btn btn-danger">Удалить</a></li>';
        }
    echo '<ul>';
    ?>

</div>
</body>
</html>