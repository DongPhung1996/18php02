<?php
//Mang tuan tu
$a = [1,2,3,4,"phong"];

echo $a[2];

//Mang khong tuan tu
$b = ["key1"=>1,
    "key2"=>"hello"
   ];

   var_dump($b);
//Mang da chieu

$c = [
    "key1"=>1,
    "key2"=>"hello",
    "key3"=>[
        "sub_child"=>[
            1
        ]
    ]
];

$c["key3"]["sub_child"] = 1;
var_dump($c);
?>
