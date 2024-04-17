<?php
    $a = 13;
    $b = 26;
    $gcd = 1;

    for ($i = 2 ; $i <= $a ; $i++) {
        if ($a % $i == 0 && $b % $i == 0) {
            if ($i > $gcd ) {
                $gcd = $i;
            }
        }
    }

    $lcm = $gcd * ($a / $gcd) * ($b / $gcd);

    echo "정수 a : $a <br>";
    echo "정수 b : $b <br>";
    echo "최대 공약수는 {$gcd}이며, 최소공배수는 {$lcm}입니다.";
?>