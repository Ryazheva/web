<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['teacher'] = [
        'name' => htmlspecialchars($_POST['teacher_name']),
        'subject' => htmlspecialchars($_POST['subject_type']),
        'experience' => (int)$_POST['experience_count']
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
