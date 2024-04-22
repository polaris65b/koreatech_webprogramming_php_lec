<?php
    $rows = rand(3, 10);
    $columns = rand(3, 10);

    $array = array();
    echo "배열의 크기 : {$rows}행 {$columns}열<br>";
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            $array[$i][$j] = rand(1, 100);
            echo $array[$i][$j] . " ";
        }
        echo "<br>";
    }

    function calculateBoundarySum($array, $rows, $columns) {
        $sum = 0;
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $columns; $j++) {
                if ($i == 0 || $i == $rows - 1 || $j == 0 || $j == $columns - 1)
                    $sum += $array[$i][$j];
            }
        }
        return $sum;
    }

    $boundarySum = calculateBoundarySum($array, $rows, $columns);
    echo "경계의 합 :$boundarySum";
?>
