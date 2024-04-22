<?php
    $score = array(
        array(28, 28, 26, 9),
        array(30, 27, 30, 10),
        array(25, 26, 24, 8),
        array(18, 22, 22, 5),
        array(24, 25, 30, 10)
    );
    $sum_array = array();
    $sum = 0;
    $avg = 0;

    echo "<table border = 1>";
    echo "<tr align = center>";
    echo "<th style='width: 150px;'>    </th>";
    echo "<th wdth = 100>중간</th>";
    echo "<th wdth = 100>기말</th>";
    echo "<th wdth = 100>팀플</th>";
    echo "<th wdth = 100>출석</th>";
    echo "<th wdth = 100>총점</th>";
    echo "</tr>";

    for ($i = 0; $i < 5; $i++) {
        echo "<tr align = center>";
        $sum = 0;
        $num = $i + 1;
        echo "<td>학생 {$num}번 : </td>";

        for ($j = 0; $j < 4; $j++) {
            echo "<td>" . $score[$i][$j] . "</td>";
            $sum += $score[$i][$j];
        }
        echo "<td>$sum</td></tr>";

        array_unshift($sum_array, $sum);
    }

    echo "<tr align = center>";
    echo "<td>과목 별 평균 : </td>";
    for ($i = 0; $i < 4; $i++) {
        $sum = 0;
        for ($j = 0; $j < 5; $j++)
            $sum += $score[$j][$i];
        $avg = $sum / 5;
        echo "<td>$avg</td>";
    }

    $sum = 0;
    for ($i = 0; $i < 5; $i++)
        $sum += $sum_array[$i];
    $avg = $sum / 5;
    echo "<td>$avg</td>";
    echo "</tr>";

    echo "</table>";
?>