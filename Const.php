<?php

define("FOO", "12345");

echo FOO;
echo FOO.PHP_EOL;
echo "344"+FOO.PHP_EOL;


echo "abc FOO".PHP_EOL;
echo "abc ${FOO}".PHP_EOL; // Undefined variable: FOO

// print_r(get_defined_constants());


const FOA = 'aaaa';

echo FOA;
echo FOA.PHP_EOL;
echo "344"+FOA.PHP_EOL;


echo "abc FOA".PHP_EOL;
echo "abc ${FOA}".PHP_EOL; // Undefined variable: FOO
