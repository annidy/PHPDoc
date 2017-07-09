<?php
spl_autoload_register(function ($class_name) {
	echo "need load $class_name\n";
    require_once $class_name . '.php';
});

$obj  = new fun();
