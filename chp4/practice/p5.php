<?php
    for($i = 1; $i <= 10; $i++){
        $sum = 1;
        for($j = $i; $j >= 1; $j--){
            $sum = $sum * $j;
        }
        echo "{$i}! = $sum<br>";
    }
?>