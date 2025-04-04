<?php
session_start();

if (!isset($_SESSION['team'])) {
    header('Location: 4.2.php');
    exit;
}

$team = $_SESSION['team'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>4.4</title>
</head>
<body>
    <h2>Данные о преподавателе.</h2>

    <p>Имя: <?= $team['name'] ?></p>
    <p>Предмет: <?= $team['subject'] ?></p>
    <p>Стаж: <?= $team['experience'] ?></p>

    <a href="4.2.php">Назад</a>
</body>
</html>