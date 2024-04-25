<?php
    $file_name = "lesson6_txt.txt";
    $content = file_get_contents($file_name);    
    $char_count = strlen($content); 

    echo "text 글자수 (공백 포함) : $char_count 자 <br>";

    $content = str_replace(' ', '', $content); 
    $char_count = strlen($content);       

    echo "text 글자수 (공백 제거) : $char_count 자 <br>";
?>