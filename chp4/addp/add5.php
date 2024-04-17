<?php
    $num = 5;

    for($i=1; $i<=$num; $i++){
        for($j=1; $j<=$num-$i; $j++){
            echo "&nbsp;";
        }
        for($k=1; $k<=$i; $k++){
            echo "$k";
        }
        if($i>1){
            for($k=$i-1; $k>0; $k--){
                echo "$k";
            }
        }
        echo "<br>";
    }
?>