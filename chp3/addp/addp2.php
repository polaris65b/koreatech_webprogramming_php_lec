<?php
    $num = 0;
    $cnt = 0;
    for($num = 100; $num < 10000; $num++){
        if($num % 9 == 0){
            echo"{$num} ";
            $cnt++;
            if($cnt % 10 == 0) echo"<br>";
        }
    }

    echo"<br>100부터 10000까지의 자연수 중에서 9의 배수의 개수는 {$cnt}개 입니다."
?>