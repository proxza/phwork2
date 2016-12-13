<html>

<table>
    <?php

    $arr1 = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9));

    $arr2 = array();

    for($i = 0;$i < 3;$i++){
        echo "<tr>";
        for($a = 0;$a < 3;$a++){
            array_push($arr2, $arr1[$a][$i]);
            echo "<td>" .$arr1[$a][$i]. "</td>";
        }
        echo "</tr>";
    }

    $result = array_merge($arr1, $arr2);

    foreach($result as $key => $value){
        foreach($value as $kez){
            echo $kez . " => %";
        }
       //echo $key . " => %" .$value;
    }

    var_dump($result);

    ?>
</table>

</html>
