<?php

function test_variable(){
    static $x = 0;
    $x++;
    echo $x."<br>";
} 
test_variable();
test_variable();
test_variable();
?>    