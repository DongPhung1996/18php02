<?php

function test_variable()
{
    static $x = 1;
    $x++;
    echo "gia tri cua x trong ham ".$x."<br>";
}
test_variable();
test_variable();
test_variable();

$a = "phong";
$b = 'xin chao $a';
echo $b;
echo strlen("phong")."<br>";
echo str_word_count("hi everyone")."<br>";
echo strpos("Hello world", "world")."<br>";
echo str_replace("world","Dolly","Hello world")."<br>";


 ?>
