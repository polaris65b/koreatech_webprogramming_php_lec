<?php
    $input = 5;

    for($i = 1; $i <= $input; $i++){
        for($j = 1; $j <= $input-$i; $j++)
            echo "&nbsp;";
        for($k = 1; $k <= $i; $k++)
            echo "*";
        if($i > 1){
            for($k=1; $k<=$i-1; $k++)
                echo "*";
        }
        echo "<br>";
    }
    for($i=$input-1; $i>=1; $i--){
        for($j=1; $j<=$input-$i; $j++)
            echo "&nbsp;";
        for($k=1; $k<=$i; $k++)
            echo "*";
        if($i<$input){
            for($k=1; $k<=$i-1; $k++)
                echo "*";
        }
        echo "<br>";
    }
?>