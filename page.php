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
if($result -> num_rows > 0){
    $_SESSION['id-partner'] = $result -> fetch_assoc()['id-partner'];
    $partnerId = $_SESSION['id-partner'];
}
$res = $result -> fetch_all(MYSQLI_ASSOC);
$selectDiscount = "SELECT `name-partner`, SUM(`count-partner`) AS TOTAL FROM `partner_products_import` GROUP BY `name-partner`";
$resultDiscount = $link2 -> query($selectDiscount) or die("Запрос на сумму продаж пользователя не сработал");
if($_SESSION['user'] != 'admin'){
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
                foreach($resultDiscount as $discount) {
            ?>
                    <?php
                    // print_r($discount);
                    $name = $row["id-partner"];
                    $query = $link2->query("SELECT `id-partner` FROM `partners_import` WHERE `id-partner` = '$name'");
                    $resQuery = $query -> fetch_assoc();
                    if($discount['name-partner'] == $resQuery['id-partner'])
                    { ?>
                        <p>
                        <?php
                            if($discount['TOTAL'] <= 10000){echo '0%';}
                            else if ( $discount['TOTAL'] > 10000 && $discount['TOTAL']  <= 50000){echo '5%';}
                            else if ( $discount['TOTAL'] > 50000 && $discount['TOTAL'] <= 300000){echo '10%';}
                            else if ( $discount['TOTAL'] > 300000){echo '15%';}
                            else {echo '0%';}
                        ?>
                        </p>
                <?php
                    }      
                ?>
                  
            <?php
            }
            ?>
        </div>
    </div>
    <?php
        }
    ?>
    <a href="requests.php">Посмотреть заявки</a>
</body>
</html>