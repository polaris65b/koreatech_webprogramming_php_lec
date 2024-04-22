<?php
    function sieveOfEratosthenes($num) {
        $primeList = array_fill(0, $num + 1, true);
        $primeList[0] = $primeList[1] = false;

        for ($p = 2; $p * $p <= $num; $p++) {
            if ($primeList[$p] == true) {
                for ($i = $p * $p; $i <= $num; $i += $p)
                    $primeList[$i] = false;
            }
        }

        $count = 0;
        for ($p = 2; $p <= $num; $p++) {
            if ($primeList[$p]) {
                echo $p . " ";
                $count++;
            }
        }
        return $count;
    }
    $num = 113;
    $count = sieveOfEratosthenes($num);
    echo "<br>Count : " . $count;
?>
