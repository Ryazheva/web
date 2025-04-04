<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['shop'] = [
        'name' => htmlspecialchars($_POST['name']),
        'category' => htmlspecialchars($_POST['subject']),
        'timework' => (int)$_POST['experience']
    ];
    header('Location: 4.1.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>4.4</title>
    </head>
    <body>
        <form method="post">
            <p>Введите имя преподавателя: <input type="text" name="name" /></p>
            <p>Введите предмет: <input type="text" name="subject" /></p>
            <p>Введите стаж: <input type="text" name="experience" /></p>
            <input type="submit" value="Отправить">
        </form>
    </body>
</html>