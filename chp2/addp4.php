<?php
    // 4번
    $x  =   3;
    $y  =   5;
    $z  =   7;
    echo "$x\t";
    echo "$y\t";
    echo "$z<br>";

    $y *= $x++ + $z;
    echo "$x\t";
    echo "$y\t";
    echo "$z<br>";

    $z -= --$x + $y;
    echo "$x\t";
    echo "$y\t";
    echo "$z<br>";

    $x *= $y - --$z;
    echo "$x\t";
    echo "$y\t";
    echo "$z<br>";

    $result = $z % ++$x;
    
    echo "result : {$result}"
?>