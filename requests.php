<?php
session_start();
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'AA LANGUGAGE II';
$link = mysqli_connect($host, $user, $pass, $name) or die('Нет подключения к базе данных');
$select = "SELECT * FROM `requests`";
$result = mysqli_query($link, $select) or die('Запрос на вывод данных не сработал');
if(isset($_POST[''])){
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
        while($row = mysqli_fetch_array($result)){
    ?>
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name-partner'] ?></td>
        <td><?php echo $row['name-product'] ?></td>
        <td><?php echo $row['count-product'] ?></td>
        <td><?php echo $row['approved'] ?></td>
        <td><?php echo $row['paid'] ?></td>
    <?php
        }
        if($_SERVER['REQUEST_METHOD'] == "POST")
    ?>
    </table>
    <form action="" method="GET">
        <input type="text" id="approve" placeholder="Одобрить">
        <input type="submit">
    </form>
</body>
</html>