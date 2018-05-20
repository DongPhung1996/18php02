<?php

function change_value(&$value)
{
    $value = 20;
}

$hi = 10;
change_value($hi);
var_dump($hi);

?>

