<?php
    $filename = "lesson6_txt.txt";
    $content = file_get_contents($filename);
    $content = strtolower($content);
    $content = preg_replace('/[[:punct:]]/', '', $content);
    $words = explode(' ', $content);
    $wordCount = array_count_values($words);

    $keys = array_keys($wordCount);

    for($i = 0; $i < count($keys); $i++) {
        echo $keys[$i] . "는 " . $wordCount[$keys[$i]] . "회 <br>";
    }
?>