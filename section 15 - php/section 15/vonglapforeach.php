<?php

$colors = array("red","green","blue","yellow");

foreach($colors as $value){
    echo "$value <br>";
}

foreach($colors as $key => $value)
{
    echo $key.'_'.$value."<br>";
}
?>