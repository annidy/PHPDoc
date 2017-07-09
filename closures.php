<?php

$message = 'hello';
$message2 = 'hello2';

//"use"
$example = function () use ($message, &$message2) {
    var_dump($message);
    $message2 = 'work';
};
echo $example();

echo $message2;