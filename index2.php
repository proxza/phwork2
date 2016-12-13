<!DOCTYPE html>
<html>
<head>
    <title>PHWork2:Каталог товаров</title>
    <style>
        body {
            font-family: Tahoma;
            font-size: 14px;
        }
        table {
            margin: 0 auto;
            width: 400px;
            border: 1px solid;
        }
        td {
            text-align: center;
        }
        a {
            font-weight: bold;
        }
    </style>
</head>
<body>
<table>
<tr>
    <td> <b>ID</b> </td> <td> <b>Название товара</b> </td> <td> <b>Количество</b> </td>
</tr>
    <?php

    // Создаем массив из товаров
    $arr1[] = array("id" => "1", "name" => "Флешки", "count" => "650");
    $arr1[] = array("id" => "2", "name" => "Ноутбуки", "count" => "58");
    $arr1[] = array("id" => "3", "name" => "Телевизоры", "count" => "0");
    $arr1[] = array("id" => "4", "name" => "Клавиатуры", "count" => "29");
    $arr1[] = array("id" => "5", "name" => "Смартфоны", "count" => "150");
    $arr1[] = array("id" => "6", "name" => "Планшеты", "count" => "0");
    $arr1[] = array("id" => "7", "name" => "Мышки", "count" => "5");
    $arr1[] = array("id" => "8", "name" => "Маршрутизаторы", "count" => "7");
    $arr1[] = array("id" => "9", "name" => "Мониторы", "count" => "73");
    $arr1[] = array("id" => "10", "name" => "МФУ", "count" => "8");

    // Если зашли на главную и GET не передавался - выполняем условие
    if (!isset($_GET['catId'])){
        foreach($arr1 as $key => $mass){
            if ($mass['count'] > 0){
                echo "<tr>";
                echo "<td><a href='index2.php?catId=" . $mass['id'] . "'>" . $mass['id'] . "</a></td>";
                echo "<td>" . $mass['name'] . "</td>";
                echo "<td>" . $mass['count'] . "шт.</td>";
                echo "</tr>";
            }
        }
    }

    // Разбиваем и выводим наш массив с товарами
    foreach($arr1 as $key => $mass){
        if ($_GET['catId'] == $mass['id']) {
            if ($mass['count'] > 0) {
                echo "<tr>";
                echo "<td><a href='index2.php?catId=" . $mass['id'] . "'>" . $mass['id'] . "</a></td>";
                echo "<td>" . $mass['name'] . "</td>";
                echo "<td>" . $mass['count'] . "шт.</td>";
                echo "</tr>";
                echo "<tr><td colspan='3'><a href='index2.php'>На главную</a></td></tr>";
            }
        }
    }

    ?>

</table>
</body>
</html>
