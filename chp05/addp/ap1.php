<?php
$numbers = array();

$evenNumbers = array();
$oddNumbers = array();

for ($i = 0; $i < 10; $i++) {
    $randomNumber = rand(1, 100);
    $numbers[$i] = $randomNumber;
    
    if ($randomNumber % 2 == 0) {
        $evenNumbers[] = $randomNumber;
    }
    else {
        $oddNumbers[] = $randomNumber;
    }
    
    echo "num" . ($i+1) . " : $randomNumber<br>";
}

echo "<짝수><br>";
for ($i = 0; $i < count($evenNumbers); $i++)
    echo $evenNumbers[$i] . " ";

echo "<br><홀수><br>";
for ($i = 0; $i < count($oddNumbers); $i++)
    echo $oddNumbers[$i] . " ";
?>
