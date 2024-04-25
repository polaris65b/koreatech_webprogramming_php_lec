<?php
    function factorial($n) {
        if ($n <= 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    $n = 5;

    $result = factorial($n);

    echo "정수 {$n}의 팩토리얼은 {$result}이다.";
?>