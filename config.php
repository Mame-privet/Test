<?php
$mysql = new mysqli("localhost", "root", "", "test");
    if ($mysql->connect_error) {
    die("Ошибка подключения: " . $mysql->connect_error);
    }
    $mysql->set_charset("utf8mb4");
    echo "Подключение успешно!";
?>    