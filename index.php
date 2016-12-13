<html>

<table>
    <?php

    $arr1[] = array(1, 2, 3);
    $arr1[] = array(4, 5, 6);
    $arr1[] = array(7, 8, 9);

    $arr2[] = array();

    // Вывод и транспонирование первой матрицы
    foreach ($arr1 as $key){
        echo "<tr>";
        foreach ($key as $test => $value) {
            $a = array_shift($arr1[$test]);
            array_push($arr2, $a);
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }

    // Вывод второй транспонированной матрицы
    foreach ($arr2 as $str){
        echo "<tr>";
        echo "<td>" .$str. "</td>";
        echo "</tr>";
    }

    print_r($arr2);

    ?>
</table>

</html>
