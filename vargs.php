<?php


function total_intervals($unit, DateInterval ...$intervals) {
    $time = 0;
    foreach ($intervals as $interval) {
        $time += $interval->$unit;
    }
    return $time;
}

$a = new DateInterval('P1D');
$b = new DateInterval('P2D');
echo total_intervals('d', $a, $b).' days';

echo sum(1, 2, 3, 4);

function sum(...$numbers) {
    $acc = 0;
    foreach ($numbers as $n) {
        $acc += $n;
    }
    return $acc;
}

/**
* 
*/
class Foo
{
	static function bar()
	{
		echo "bar".PHP_EOL;
	}

	function baz() {
		echo "baz";
	}
}

// 数组可变函数

$func = array("Foo", "bar");
$func(); // prints "bar"
$f = array(new Foo, "baz");
$f(); // prints "baz"
$f = "Foo::bar";
$f(); // prints "bar" as of PHP 7.0.0; prior, it raised a fatal error