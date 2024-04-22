<?php
    $numbers = range(1, 20);

    $odd = array();
    $even = array();

    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] % 2 == 0)
            array_push($even, $numbers[$i]);
        else
            array_push($odd, $numbers[$i]);
    }

    $even = array_reverse($even);

    $sortedNumbers = array_merge($odd, $even);

    for ($i = 0; $i < count($sortedNumbers); $i++)
        echo $sortedNumbers[$i] . " ";
?>
