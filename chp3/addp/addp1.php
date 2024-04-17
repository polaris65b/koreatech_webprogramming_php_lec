<?php
    $year = 2024;

    if($year % 4 == 0){
        if($year % 100 == 0){
            if($year % 400 == 0)
                echo "{$year}년은 윤년입니다.";
            echo "{$year}년은 윤년이 아닙니다.";
        }    
        echo "{$year}년은 윤년입니다.";
    }
?>