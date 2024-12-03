<?php
    error_reporting(E_ALL);
 // include не останавливает выполнение кода
 // requare останавливает выполнение кода
// $a = '12345';
// $b = $a[0] + $a[1] + $a[2] + $a[3] + $a[4];
// echo $b;
// for($c = 0; $c<$a; $c++)
// {
//     echo $c;
// }

// $year = 365;
// $leapYear = 366;
// $minuts = 60;                    
// $hour = 24;
// $answer = ($minuts*$hour)*$year;
// echo "Обычный год: " . $answer;
// $leapAnswer = ($minuts*$hour)*$leapYear;
// echo '<br>' . "Високосный: ";
// echo $leapAnswer;

// $array = [2,5,3,9];
// $res = ($array[0] * $array[1]) + ($array[2] * $array[3]);
// echo $res;

// $array = ['year'=> 2024, 'mount' => 9, 'day'=>5];
// if($array['mount'] === 9)
// {
//     print_r($array);
// }
// else
// {
//     echo "Ээээ нет";
// }

// $num1 = 5;
// $num2 = 5;
// if ($num1 == 1 || $num1<1 && $num2 > 3 || $num2 == 3)
// {
//     echo "Да";
// }
// else
// {
//     echo "Нет";
// }


// $day = 1;
// if($day < 11)
//     echo "День первой декады";
// else if ($day >= 11 && $day < 21)
//     echo "День второй декады";
// else
//     echo "День третьей декады";

// $age = 28;
// if($age < 10 || $age > 99)
//     $summa = $age[0] + $age[1];
//     echo "Вы либо младше десяти, либо старше девяноста девяти";
//     echo($summa);
//     if($summa <= 9)
//         echo "Сумма цифр вашего возраста однозначна";
//     else
//         echo "Сумма цифр вашего возраста двузначна";
// else
//     echo "Вы кто";

// $num = 1;
// for($i = 0; $i <=100; $i++)
// {
//     if($num <= 100)
//     {
//         $num = $num + $i;
//     }
//     else
//     {
//         echo $i;
//         break;
//     }
// }

// $array = [12,25,13,34,13];
// $arr = [];
// for($i = 0; $i < count($array); $i++)
// {
//     if(strval($array[$i])[0] == '1' || strval($array[$i])[0] == '2')
//     {
//         $arr = $array[$i];
//         echo $arr . ' ';
//     }
// }

// задание 1 
// Напишите программу, которая выводит на экран сумму чисел от 1 до 100.

// $summa = 0;
// for($i = 1; $i <= 100; $i++)
// {
//     $summa += $i;
// }
// echo "Сумма чисел от 1 до 100: " . $summa . "<br>";

// задание 2
// Дана $max = 526 и $min = 17. Поместите в массив только те числа из диапазона от min до max, которые делятся на 3 без остатка. Если в полученном диапазоне таких чисел не получится - выведите сообщение об этом. Если такие цифры будут, то выведите на экран получившийся массив.

// $max = 526;
// $min = 17;
// $array = [];
// for($k = $min; $k <= $max; $k++)
// {
//     if($k % 3 == 0)
//     {
//         echo array_push($array,$k);
//     }
// }
// if(count($array) == 0)
// {
//     echo "В полученном диапазоне таких чисел нет";
// }
// else{
//     print_r($array);
// }

// задание 3
// У вас есть массив с названиями месяцев, создайте ассоциативный массив, в котором ключами являются названия месяцев, а значениями их порядковые номера.

// $arr1 = ['янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек'];
// $elems = [];
// for($j = 1; $j <= count($arr1); $j++)
// {
//    array_push($elems,$j);
// }
// $result = array_combine($arr1, $elems);
// print_r($result);

// $array = [];
// function func($num)
// {
//     for($i = 1; $i <= $num; $i++)
//     {
//         if($num % $i == 0){
//             $array[] = $i;
//         }
//     }
//     return $array;
// }
// print_r(func(5));

// $array = [];
// function func($num,$numTwo)
// {
//     for($i=1;$i<= min ($num,$numTwo); $i++)
//     {
//         if($num % $i == 0 && $numTwo % $i == 0)
//         {
//             $array[] = $i;
//         }
//     }
//     return $array;
// }
// print_r(func(20,10));

// function func($num,$summa)
// {
//     $array = str_split($num,1);
//     for($i = 0; $i < count($array); $i++)
//     {
//         $summa += $array[$i];
//     }
//     return $summa;
// }
// echo func(17,0);

// $date = date('w');
// function func($date)
// {
//     $array = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];
//     return $array[$date];
// }
// echo func($date);

// $date = date('d.m.Y');
// function func($date)
// {
//     $string = explode('.',$date);
//     $array = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"];
//     echo $array[date('w',mktime(0,0,0,(int)$string[1],(int)$string[0],(int)$string[2]))];
    
// }
// func($date);

// $seconds = 10000000;
// function func($seconds)
// {
//     $days = floor($seconds / (60*60*24));
//     echo $days;
// }
// func($seconds);

// $year = date('Y');
// function func($year)
// {
//     if($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0)
//     {
//         echo "Год високосный";
//     }
//     else{
//         echo "Год не високосный";
//     }
// }
// func($year);

// function func($number)
// {
//     for($i = 2; $i < $number; $i++)
//     {
//         if($number % $i != 0)
//         {
//             return $number . ' Простое';
//         }
//         else{
//             return $number . ' Непростое';
//         }
//     }
// }
// echo func(5);

// $str = 'aa aba abba abbba abca abea';
// $result = preg_replace('#ab+a#','!',$str);

// задание 2
// $str = 'aa aba abba abbba abca abea';
// $result = preg_replace('#ab*a#','!',$str);

// задание 3
// $str = 'aa aba abba abbba abca abea';
// $result = preg_replace('#ab?a#','!',$str);

// задание 4
// $str = 'aa aba abba abbba abca abea';
// $result = preg_replace('#ab*a#','!',$str);

// $str = 'aa aba abba abbba abbbba abbbbba';
// $result = preg_replace('#ab{2,4}a#','!',$str);

// задание 2
// $str = 'aa aba abba abbba abbbba abbbbba';
// $result = preg_replace('#ab{0,3}a#','!',$str);

// задание 3
// $str = 'aa aba abba abbba abbbba abbbbba';
// $result = preg_replace('#ab{4,}a#','!',$str);

// $str = 'aba accca azzza wwwwa';
// $result = preg_replace('/..+?a/','!',$str);

// $str = 'a1a a2a a3a a4a a5a a66a aba aca';
// $result = preg_replace('/a\da/','!',$str);

// $str = 'a1a a22a a333a a4444a a55555a aba aca';
// $result = preg_replace('/a\d+a/','!',$str);

// $str = 'aa a1a a22a a333a a4444a a55555a aba aca';
// $result = preg_replace('/a\d*a/','!',$str);

// $str = 'avb a1b a2b a3b a4b a5b abb acb';
// $result = preg_replace('/a\Db/','!',$str);

// $str = 'ave a#b a2b a$b a4b a5b a-b acb';
// $result = preg_replace('/a\Wb/','!',$str);

// $str = 'ave a#a a2a a$a a4a a5a a-a aca';
// $result = preg_replace('/\s/','!',$str);
// $result = preg_replace('#\s#','!',$str);

// $str = 'aAXa aeffa aGha aza ax23a a3sSa';
// $result = preg_replace('/a[a-z0-9]+a/','!',$str);
// echo $result;
// Напишите регулярку, которая найдет строки по шаблону: буква 'x', затем не большая и не маленькая латинская буква и не цифра от 1 до 5 от 1 и более раз, буква 'z'.

// $str = 'xa6Fz xz xaz x111z x6z';
// $result = preg_replace('/x[^a-zA-Z1-5]+z/','!',$str);

// $str = 'xaz x.z x3z x@z x$z xrz';
// $result = preg_replace('/x[^.@$]z/','!',$str);

// $str = 'x]x xax x[x x1x';
// $result = preg_replace('#x[\[\]]x#', '!', $str);

// $str = 'xaz x$z x-z xcz x+z x%z x*z';
// $result = preg_replace('/x[$+-]z/','!',$str);

// echo preg_replace('#\b[a-z]+\b#', '!', 'axx bxx xxx exx');
// Команда \b обозначает начало или конец слова, а \B, соответственно, - не начало и не конец слова.

// Определите, заканчивается ли переданная строка расширением jpg или jpeg.
// $str = 'jpeg image.jpeg';
// $result = preg_match('/\.jpeg$/',$str);
// $result2 = preg_match('/\.jpg$/',$str);

// $str = 'eee site.ru bbb';
// $reg = '#([a-z0-9_-]+)\.([a-z]{2,})#';
// preg_match($reg, $str, $res);
// var_dump($res); 

// $str = 'index.html';
// $reg = '/([a-z0-9]+)\.([a-z]{0,4})/';
// preg_match($reg,$str,$res);
// print_r($res);

// $str = '2023-10-29 2024-11-30 2025-12-31';
// $reg = '/([0-9]{4})\-([0-9]{1,2})\-([0-9]{1,2})/';

// $str = 'aaa@bbb ccc@ddd';
// $res = preg_replace('#([a-z]+)@([a-z]+)#', '$2@$1', $str)

// $str = '12 34 56 78';
// $res = preg_replace('/(\d{0,2})(\d{0,2})/','$2$1',$str);

// $str = '31.12.2025';
// $res = preg_replace('/(\d{1,2})\.(\d{1,2})\.(\d{4})/','$3.$2.$1',$str);

// $str = 'a aa aaa abab bbbb';
// $res = preg_replace('/([a-z])\1/','!',$str);

// $str = 'aaa aaa bbb bbb ccc ccc ddd';
// $res = preg_replace('/([a-z]+\s)\1+/','!',$str);

// $str = '2025-10-29';
// 	$reg = '#(?<year>\d{4})-(?<month>\d{2})-(?<day>\d{2})#';
// 	preg_match($reg, $str, $match);
// 	var_dump($match);

// Описанные именованные карманы имеют еще несколько альтернативных синтаксисов: (?P<name>pattern) и (?'name'pattern)

// Теперь мы можем обратиться к этому карману через синтаксис \k<name>, вот так:
// 	$res = preg_replace('#(?<letter>[a-z])\k<letter>#', '!', $str);
// Описанные именованные карманы имеют еще несколько альтернативных синтаксисов: (?P=name), \k'name', \k{name}.

// $str = '12:59:59 12:59:12 09:45:09';
// $res = preg_replace('/(?<hours>\d{2}):(?<minutes>[\d]{2}):\k<hours>/','!',$str);


// $arr = [
//     '31-12-2025',
//     '30-11-1995',
//     '29-10-1990',
// ];
// foreach($arr as $key => $value)
// {
//     preg_match('/(\d{2})-(\d{2})-(?|19(9\d)|20(\d\d))/',$value,$res);
//     print_r($res); 
// }

// $str = '<a href="" class="eee" id="zzz">';
// $reg = '/\b(\w+)(?==)/';
// preg_match_all($reg, $str, $result);
// print_r($result);

// preg_replace('#[a-z]+#i', '!', 'aaa bbb AAA'); // вернет '! ! !'
// i - игнорировать регистр;
// x - игнорировать комментарии
// u - юникод, работа с кириллицей
// U - нежадность
// j - просматривать всю строку до конца

// $arr = [
//     ['value' => '1', 'text' => 'text1'],
//     ['value' => '2', 'text' => 'text2'],
//     ['value' => '3', 'text' => 'text3'],
// ];
// $html = '<select>';
// foreach ($arr as $option) {
    // echo '<option>' . $option['value'] . '">' . $option['text'] . '</option>';
//     $html .= "<option value= {$option['value']} > {$option['text']}</option>";
// }
// $html /= '</select>';

// $html = '<table>';
// $arr = [
//     ['name' => 'user1', 'age' => 30, 'salary' => 500],
//     ['name' => 'user2', 'age' => 31, 'salary' => 600],
//     ['name' => 'user3', 'age' => 32, 'salary' => 700],
// ];
// foreach($arr as $elems)
// {
//     $html .= "<tr>
//         <td>
//             {$elems['name']}
//         </td>
//         <td>
//             {$elems['age']}
//         </td>
//         <td>
//             {$elems['salary']}
//         </td>
//     </tr>";
// }
// $html .= '</table>';
// echo $html;

// $arr = [
//     [
//         'name' => 'user1',
//         'age'  => 30,
//     ],
//     [
//         'name' => 'user2',
//         'age'  => 31,
//     ],
//     [
//         'name' => 'user3',
//         'age'  => 32,
//     ],
// ];
// session_start();
// 	if (!isset($_SESSION['time'])) {
//         $_SESSION['time'] = time();
// 	} 
// 	echo (time() - $_SESSION['time']);
?>
<!-- С помощью трех инпутов спросите у пользователя год, месяц и день рождения пользователя. 
 После отправки формы определите день недели, в который родился пользователь.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/indexStyle.css">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- <form action="" method="POST"> -->
        <!-- <label for="year">Введите год вашего рождения:</label>
        <input type="number" name="year" value="<?php // if(isset($_GET['year'])) echo $_GET['year']?>">
        <br>
        <label for="month">Введите месяц вашего рождения:</label>
        <input type="number" name="month" value="<?php // if(isset($_GET['month'])) echo $_GET['month']?>">
        <br>
        <label for="day">Введите день вашего рождения:</label>
        <input type="number" name="day" value="<?php // if(isset($_GET['day'])) echo $_GET['day']?>">
        <br>
        <input type="submit"> -->
        <!-- <label for="userName">Введите имя:</label>
        <input type="text" name="userName" value="" required>
        <br>
        <label for="userSurname">Введите фамилию:</label>
        <input type="text" name="userSurname" value="" required>
        <br>
        <label for="userLastname">Введите отчество:</label>
        <input type="text" name="userLastname" value="" required>
        <br>
        <label for="userAge">Введите возраст:</label>
        <input type="number" name="userAge" value="" required>
        <br>
        <label for="userSalary">Введите зарплату:</label>
        <input type="number" name="userSalary" value="" required>
        <br>
        <input type="submit"> -->
        <!-- <label for="image">Загрузите фотографию:</label>
        <input type="file" name="userImage" required>
        <br>
        <input type="submit"> -->
    <!-- </form> -->
    <?php

    // if(!empty($_POST) && isset($_POST))
    // {
    //     $_SESSION['images'] = $_POST;
    //     $image = $_SESSION['images'];
    //     $size = filesize($image) / (1024 * 1024);
    //     if($size > 1)
    //     {
    //         echo "Размер фотографии больше одного мегабайта";
    //     }
    //     else
    //     {
    //         echo "Размер фотографии меньше одного мегабайта";
    //     }
    // }

    // echo file_get_contents(__DIR__ . '/dir/dir2/dir3/test.txt');

    // Пусть в корне вашего сайта лежит файл. 
    // С помощью цикла положите в папку copy пять копий этого файла. 
    // Именем файлов копий пусть будут их порядковые номера.

    // for($i = 0; $i <= 5; $i++)
    // {
    //     copy('summa.txt','copy/' . $i .'.txt');
    // }
    // echo file_get_contents(__DIR__ . '/copy/1.txt');

    // $array = ['1','2','3'];
    // for($i = 0; $i < count($array); $i++)
    // {
    //     unlink(__DIR__ . $array[$i] . '.txt');
    // }

    // Пусть у вас есть файл, в котором записано некоторое число. 
    // Откройте этот файл, возведите число в квадрат и запишите обратно в файл.
    // $pow = file_get_contents('2.txt');
    // file_put_contents('2.txt', $pow*$pow);
    // echo file_get_contents('2.txt');

    // Пусть в корне вашего сайта лежит файл count.txt. 
    // Изначально в нем записано число 0. 
    // Сделайте так, чтобы при обновлении страницы наш скрипт каждый раз увеличивал это число на 1. 
    // То есть у нас получится счетчик обновления страницы в виде файла.

    // session_start();
    // $pow = file_get_contents('count.txt');
    // file_put_contents('count.txt', ++$pow);
    // echo file_get_contents('count.txt');

    // Пусть в корне вашего сайта лежат файлы 1.txt, 2.txt и 3.txt. 
    // Вручную сделайте массив с именами этих файлов. 
    // Переберите его циклом, прочитайте содержимое каждого из файлов, слейте его в одну строку и запишите в новый файл new.txt. 
    // Изначально этого файла не должно быть.

    // $array = ['1','2','3'];
    // $string = '';
    // for($i = 0; $i < count($array); $i++)
    // {
    //     $summa = file_get_contents($array[$i] . '.txt');
    //     $string .= $summa;
    // }
    // file_put_contents('new.txt', $string);
    // echo file_get_contents('new.txt');

    // $_SESSION['DOCUMENT_ROOT'] - корень документа сайта
    // session_start();
    // if(!empty($_POST) && isset($_POST))
    // {
    //     $_SESSION['nums'] = $_POST;
    //     header('Location: page.php');
    // }
    // echo(file_get_contents('1.txt') + file_get_contents('2.txt'));
    // $array = [1,2,3,4];
    // $summa = array_sum($array);
    // file_put_contents('summa.txt', $summa);
    // echo '<br>';
    // echo file_get_contents('summa.txt');
    // if($_SERVER['REQUEST_METHOD'] === 'POST')
    // {
    //     $inputPassword = $_POST['userPassword'];
    //     $inputName = $_POST['userName'];
    //     $login = "admin";
    //     $password = "1234";
    //     if($inputPassword === $password && $inputName === $login){
    //         $_SESSION['user'] = 'admin';
    //         header('Location:page.php');
    //     }
    //     else{
    //         $_SESSION['user'] = $inputName;
    //         header('Location:userPage.php');
    //         exit(); 
    //     }
    // }
    // if($_GET)
    // {
    //         	$date = date('w', mktime(0, 0, 0, $_GET['day'], $_GET['month'], $_GET['year']));
    //             $weekdays = ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"];
    //             echo $weekdays[$_GET['day']];
    // }
    // $file = file_get_contents('names.txt');
    // $names = explode("\n",$file);
    // print_r($names);
    // mkdir('users2');
    // foreach($names as $name)
    // {
    //     mkdir($name['']);   
    // }

    // include_once(__DIR__ . '/config/link.php');
    // $array = [[
    //     'name' => 'Bdffgdg Bfdsfdsf Gfggf',
    //     'age' => 30,
    //     'salary' => 50000
    // ],
    // [
    //     'name' => 'Bhgfhfghfgh Bfkhjhjkhjkhjk Glkjlkjljkl',
    //     'age' => 32,
    //     'salary' => 506767
    // ]];
    // foreach($array as $user => $value)
    // {
    //     echo $value['name'];
    //     $query = "INSERT INTO `users`(`name`, `age`, `salary`) VALUES ({$value['name']},{$value['age']},{$value['salary']})";
	//     mysqli_query($link, $query);

    // }
    // echo 'fff';
    // $table = '<table border="1px">';
    // $values = mysqli_fetch_assoc($res);
    // $table .= "<th>{$values['id']}</th><th>{$values['name']}</th><th>{$values['age']}</th><th>{$values['salary']}</th>";
    // if($res)
    // {

    //     while($row = mysqli_fetch_assoc($res))
    //     {
    //         $table .= "<tr> id: <td>{$row['id']}</td>, Name: <td>{$row['name']}</td>, Age: <td>{$row['age']}</td>, Salary: <td>{$row['salary']}</td></tr>" . '<br>';
    //     }
    // }
    // $table .= "</table>";
    // echo $table;

    // $link2 = new mysqli($host, $user, $pass, $name) or die('errorrrr');
    // $result = $link2->query('SELECT `material_type_import`.`id-material`, `products_import`.`id-product` FROM `material_type_import`, `products_import`');
    // $res = $result->fetch_all(MYSQLI_ASSOC);
    // $link2->real_escape_string($link);
    // foreach ($res as $row) {
    //     echo $row['id-material'] . '<br>';
    //     echo $row['id-product'] . '<br>';
    // }
    // $link2->close();
    
    $host = 'localhost';
	$user = 'root';
	$pass = '';
	$name = 'AA LANGUGAGE II';
	$link = mysqli_connect($host, $user, $pass, $name) or die('Нет подключения к базе данных');
    session_start();
    $select = "SELECT * FROM `partners_import`";
    $result = mysqli_query($link, $select) or die('Запрос не сработал');
    while($row = mysqli_fetch_assoc($result)){
        if(isset($_POST['password']) && isset($_POST['login']) && !empty($_POST)){
            $_SESSION['login'] = $_POST['login'];
            mysqli_real_escape_string($link, $_POST['password']);
            mysqli_real_escape_string($link, $_POST['login']);
            $inputPassword = $_POST['password'];
            $inputLogin = $_POST['login'];
            if($inputPassword === '111' && $inputLogin === 'admin'){
                $_SESSION['user'] = 'admin';
                header('Location:page.php');
            }
            else{
                $_SESSION['user'] = $inputLogin;
                header('Location:userPage.php');
            }
        }
    }
    ?>
</head>
<body>
    <form action="" method="POST">
        <h1>Добро пожаловать!</h1>
        <input type="text" name="login" id="login" placeholder="Введите логин">
        <input type="password" name="password" id="password" placeholder="Введите пароль">
        <input type="submit" id="start">
    </form>
</body>
</html>
