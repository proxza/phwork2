<html>
<head>
    <title>PHWork2:Работа с массивами</title>
    <style>
        table {
            border: 1px solid;
            margin: 0 auto;
        }
    </style>
</head>

<table>
    <?php

    $arr1[] = array(1, 2, 3);
    $arr1[] = array(4, 5, 6);
    $arr1[] = array(7, 8, 9);

    $arr2[] = array();

    // Вывод и транспонирование первой матрицы
    foreach ($arr1 as $key){
        foreach ($key as $test => $value) {
            $a = array_shift($arr1[$test]);
            $arr2[] = $a; // Заполняем 2й пустой массив (транспорируем)
            $arr3[] = $value; // Сохраняем в новую переменную наш исходный массив так как из исходного все ключи будут "изьяты" array_shift'ом
        }
    }

    // Слаживаем массивы
    for ($i = 1;$i <= 9;$i++){
        array_push($arr3, $arr2[$i]);
    }

    // Изобретаем Велосипед!

    $b = 0; // Инициализируем пустую переменную

    // Пуляем наш первый цикл для 1го толбца
    echo "<tr>";
    while ($b <= 8)
    {
        echo "<td>% " . $arr3[$b] . "</td>";
        $b++;
    }
    echo "</tr>";

    $c = 9;
    // Пуляем наш второй цикл для 2го столбца
    echo "<tr>";
    while ($c <= 17)
    {
        echo "<td>% " . $arr3[$c] . "</td>";
        $c++;
    }
    echo "</tr>";

    //var_export($arr3);

    ?>
</table>

</html>
