<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'AA LANGUGAGE II';
$link = mysqli_connect($host, $user, $pass, $name) or die('Нет подключения к базе данных');
$select = "SELECT * FROM `requests`";
$result = mysqli_query($link, $select) or die('Запрос на вывод данных не сработал');
$selectProducts = "SELECT * FROM `partner_products_import`";
$resultSelect = mysqli_query($link, $selectProducts) or die('Запрос на вывод всех покупок не сработал');
if($_SERVER['REQUEST_METHOD'] == "GET" && isset($_GET['approve'])){
    while ($row = mysqli_fetch_assoc($resultSelect)) {
        $productName = $row['product-partner'];
        $partnerName = $row['name-partner'];
        $countPartner = $row['count-partner'];  
    }
    while ($row = mysqli_fetch_assoc($result)) {
         $productNamee = $row['name-product'];
        $partnerNamee = $row['name-partner'];
        $productCount = $row['count-product']; 
    }
    $approve = 1;
    $partnerId = $_GET['approve'];
    $update = "UPDATE `requests` SET `approved`='$approve' WHERE `id` = '$partnerId'";
    $res = mysqli_query($link, $update) or die("Запрос на обновление не сработал");
    $insert = "INSERT INTO `partner_products_import`(`product-partner`, `name-partner`, `count-partner`, `date-partner`) VALUES ('$productNamee','$partnerNamee','$productCount','05.12.2024')";
    $resultInsert = mysqli_query($link, $insert) or die("Запрос на вставку в общие покупки не сработал");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/requestStyle.css">
    <title>Document</title>
</head>
<body>
    <a href="page.php">Вернуться</a>
    <table>
        <tr>
            <td>id</td>
            <td>Название партнёра</td>
            <td>Название продукта</td>
            <td>Количество</td>
            <td>Одобрено</td>
            <td>Оплачено</td>
        </tr>
    <?php
        while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name-partner'] ?></td>
        <td><?php echo $row['name-product'] ?></td>
        <td><?php echo $row['count-product'] ?></td>
        <td><?php echo $row['approved'] ?></td>
        <td><?php echo $row['paid'] ?></td>
    </tr>
    <?php
        }
    ?>
    </table>
    <form action="" method="GET">
        <input type="text" id="approve" name="approve" placeholder="Одобрить">
        <input type="submit">
    </form>
</body>
</html>