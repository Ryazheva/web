<?php
session_start();

if (!isset($_SESSION['teacher'])) {
    header('Location: 4.2.php');
    exit;
}

$teacher = $_SESSION['teacher'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>4.4</title>
</head>
<body>
    <h2>Данные о преподавателе.</h2>

    <p>Имя: <?= $teacher['name'] ?></p>
    <p>Предмет: <?= $teacher['subject'] ?></p>
    <p>Стаж: <?= $teacher['experience'] ?></p>

    <a href="4.2.php">Назад</a>
</body>
</html>
