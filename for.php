<?php

for ($i = 1; $i < 10; $i++) {
    echo $i;
}


for($col = 'R'; $col != 'AD'; $col++) {
    echo $col.' ';
}

for($col = '12'; $col != '20'; $col++) {
    echo $col.' ';
}

for($col = '1a'; $col != '2f'; $col++) {
    echo $col.' ';
}

echo PHP_EOL;

for ($i = 0, $j = 4; $i < $j; ++$i) {
	echo $i.' ';
}