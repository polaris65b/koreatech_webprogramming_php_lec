<?php
    $price      =   30000;         // 음식값
    $service    =   "매우 만족";    // 서비스 만족도 : 매우 만족, 만족, 불만족
    echo "서비스 만족도 : {$service}<br>";

    if($service == "매우 만족")
        $tip = $price * 0.2;
    elseif($service == "만족")
        $tip = $price * 0.1;
    elseif($service == "불만족")
        $tip = $price * 0.05;

    echo "팁 : {$tip}원";
?>