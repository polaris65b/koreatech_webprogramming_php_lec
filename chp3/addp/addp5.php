<?php
    $rate = 5;
    $price = 300;
    $category = "전자제품";
    $IsVIP = "VIP";

    if($category == "전자제품")
        $rate += 5;
    elseif($category == "의류")
        $rate += 3;

    if($price >= 200)
        $rate += 5;

    if($IsVIP == "VIP")
        $rate += 5;

    $discount = $price * $rate / 100;
    $pay = $price - $discount;
    echo"원 가격 : \${$price}<br>";
    echo"제품 카테고리 : {$category}<br>";
    echo"멤버십 등급: {$IsVIP}<br>";
    echo"적용된 할인율 : {$rate}%<br>";
    echo"할인 받는 가격 : \${$discount}<br>";
    echo"할인 후 가격 : \${$pay}";
?>