<?php

/*$a = [1,2,3,4];
echo $a[2];

$a = [
    "key1" => 1,
    "key2" => 2
];

$a["key3"] = 3;
var_dump($a);*/

$b = [
    "key1" => 1,
    "key2" => 2,
    "key3" =>[
        1,
        "key_sub" => [
            1
        ]
    ]
];

$b["key3"]["test"] = 1;

var_dump($b);
?>
