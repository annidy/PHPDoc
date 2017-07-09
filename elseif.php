<?php


$a = 4;
$b = 2;

// elseif 为 : 而生
if($a > $b):
    echo $a." is greater than ".$b;
    echo $a." is greater than ".$b;
elseif($a == $b): // 注意使用了一个单词的 elseif
    echo $a." equals ".$b;
else:
    echo $a." is neither greater than or equal to ".$b;
endif;

