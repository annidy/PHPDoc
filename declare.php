<?php

declare(ticks=1);

// A function called on each tick event
function tick_handler()
{
    echo "tick_handler() called\n";
}

register_tick_function('tick_handler');

$a = 1;

for (;$a < 5;) {
    $a += 2;
    print("$a\n");
}