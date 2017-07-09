<?php

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
}

print_r($arr);

$value *= 2;

print_r($arr);


foreach ($arr as $k => &$v) {
	echo "$k $v";
}


$arr = array(
     [1, 2, 3,   4],
     [14, 6, 7,  6],
     [10, 2 ,3 , 2],
);

foreach( $arr as list( , , $a)) {
    echo "$a\n";
}
