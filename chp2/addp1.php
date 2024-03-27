<?php
    // 1번
    $x  =   10;
    $y  =   20;
    echo "$x\t";
    echo "$y<br>";

    $y  -=  $x--;
    echo "$x\t";
    echo "$y<br>";

    $x  -=  --$x;
    echo "$x\t";
    echo "$y<br>";

    $y  +=  ++$y;
    echo "$x\t";
    echo "$y<br>";

    $1a = 1;

    $result =  $y + $x;

    echo "result : {$result}"
?>