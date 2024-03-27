<?php
    $a  =   3;
    $b  =   2;

    $a  =   $a + $b;
    $b  =   $a + $a;
    $c  =   $a + $a;

    $c  =   $c % 2;
    $a  =   $b + $c;
    $b  =   $a * $b;

    echo "a : $a, b : $b, c : $c";
?>