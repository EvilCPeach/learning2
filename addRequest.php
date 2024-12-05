<?php 
session_start();
error_reporting(E_ALL);
$host = 'localhost';
$user = 'root';
$pass = '';
$name = 'AA LANGUGAGE II';
$link2 = new mysqli($host, $user, $pass, $name) or die('Нет подключения к базе данных');
$userSession = $_SESSION['user'];
print_r($userSession);
$select = "SELECT * FROM `partners_import` WHERE `partners_import`.`mail-partner` = '$userSession'";
$result = $link2 -> query($select) or die("Запрос на выбор не сработал");
if($result -> num_rows > 0){
    $_SESSION['id-partner'] = $result -> fetch_assoc()['id-partner'];
    $partnerId = $_SESSION['id-partner'];
}
$res = $result -> fetch_all(MYSQLI_ASSOC);
if(!empty($_GET)){
    mysqli_real_escape_string($link2, $_GET['name-partner']);
    mysqli_real_escape_string($link2, $_GET['count-partner']);
    $namePartner = $_GET['name-partner'];
    $typeProduct = $_GET['type-product'];
    $nameProduct = $_GET['name-product'];
    $countPartner = $_GET['count-partner'];
    if(empty($_GET['paid'])){
        $paid = 0;
    }
    else{
        $paid = 1;
    }
    $add = "INSERT INTO `requests`(`name-partner`, `name-product`, `count-product`, `approved`, `paid`) VALUES ('$partnerId','$nameProduct','$countPartner','0','$paid')";
    $addQuery = $link2->query($add) or die("Запрос на добавление не сработал");
}
print_r($_GET);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/requestUserStyle.css">
    <title>Document</title>
</head>
<body>
    <a href="./userPage.php">Вернуться</a>
    <form action="" method="GET">
        <input type="text" placeholder="Введите имя" name="name-partner">
        <select title="type-product" name="type-product" id="type-product">
            <option disabled selected> -- выберите вид -- </option>
            <option value="1">Ламинат</option>
            <option value="2">Массивная доска</option>
            <option value="3">Паркетная доска</option>
            <option value="4">Пробковое покрытие</option>
        </select>
        <select title="name-product" name="name-product" id="name-product">
            <option disabled selected> -- выберите изделие -- </option>
            <option value="1"> Паркетная доска Ясень темный однополосная 14 мм </option>
            <option value="2"> Инженерная доска Дуб Французская елка однополосная </option>
            <option value="3"> Ламинат Дуб дымчато-белый 33 класс 12 мм </option>
            <option value="4"> Ламинат Дуб серый 32 класс 8 мм с фаской </option>
            <option value="5"> Пробковое напольное клеевое покрытие 32 класс 4 мм </option>
        </select>
        <input type="text" placeholder="Введите количество" name="count-partner">
        <label for="paid">Оплачено:</label>
        <input type="checkbox" name="paid">
        <input type="submit" id="send">
    </form>
</body>
</html>