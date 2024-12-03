<?php
session_start();
error_reporting(E_ALL);
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'AA LANGUGAGE II';
$link2 = new mysqli($host, $user, $pass, $name) or die('Нет подключения к базе данных');
$select = "SELECT * FROM `partners_import`";
$result = $link2->query($select);
$res = $result -> fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>
<body>
    <h1>Добро пожаловать на страницу юзера</h1>
    <button>Выход</button>
    <?php
        foreach($res as $row) {
    ?>
    <div class="card">
        <div class="content-left">
            <p><?php echo $row['type-partner'] ?></p>
            <p>|</p>
            <p><?php echo $row['name-partner'] ?></p>
            <p><?php echo $row['manager-partner'] ?></p>
            <p><?php echo $row['phone-partner'] ?></p>
            <p><?php echo 'Рейтинг: ' . $row['rating-partner'] ?></p>
        </div>
        <div class="content-right">
            <p>10%</p>
        </div>
    </div>
    <?php
        }
    ?>
    <script>
        let button = document.querySelector('button').addEventListener('click',function(){
            window.location.replace('index.php');
            <?php session_destroy() ?>
        });
    </script>
</body>
</html>