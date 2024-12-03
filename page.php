<?php
session_start(); 
error_reporting(E_ALL);
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'AA LANGUGAGE II';
$link2 = new mysqli($host, $user, $pass, $name) or die('Нет подключения к базе данных');
$select = "SELECT * FROM `partners_import` WHERE `partners_import`.`mail-partner` NOT IN ('admin')";
$computeDisk = "SELECT `name-partner`, SUM(`count-partner`) AS TOTAL FROM `partner_products_import` GROUP BY `name-partner`";
$result = $link2->query($select);
$res = $result -> fetch_all(MYSQLI_ASSOC);
$resultDisk = $link2 -> query($computeDisk);
$resDisk = $resultDisk -> fetch_all(MYSQLI_ASSOC);
if($_SESSION['user'] != 'admin')
{
    header('Location:index.php');
}
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
    <h1>Добро пожаловать на страницу партнёра</h1>
    <a href="./index.php"<?php session_destroy() ?>>Выход</a>
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
            <?php
                foreach($resDisk as $disk) {
            ?>
                <p><?php print_r($disk) ?></p>
            <?php
            }
            ?>
        </div>
    </div>
    <?php
        }
    ?>
</body>
</html>