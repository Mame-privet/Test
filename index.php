<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
</head>
<body>
<?php
<h1>11111</h1>
require "config.php";
?>
<form method="post">
    <input type="text" name="name" placeholder="Название темы"><br>
    <input type="text" name="option" placeholder="Описание"><br>
    <button type="submit" name="action" value="send">Отправить</button><br>
</form>





<?php
$mysql->close();
?>
    
</body>
</html>