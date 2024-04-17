<?php
    $input = 13;
    $f = TRUE;
    for($i = 2; $i < $input; $i++){
        if($input % $i == 0)
            $f = FALSE;
    }

    if($f = TRUE)
        echo "{$input}은 소수입니다.";
?>