<?php
    $consum = 2200;
    $pay = 0;

    echo "전력 소비량 {$consum} kWh에 대한 지불액은 ";
    while($consum > 0){
        if($consum >= 4001){
            $pay += 3850;
            $consum -= 1;
        }
        elseif($consum >= 2001 && $consum <= 40000){
            $pay += 1600;
            $consum -= 1;
        }
        elseif($consum >= 501 && $consum <= 20000){
            $pay += 910;
            $consum -=1;
        }
        else{
            $pay += 410;
            $consum -= 1;
        }
    }
    echo "{$pay}원 입니다.";
?>