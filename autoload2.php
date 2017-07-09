<?php
function __autoload ($class_name) {
	echo "need load $class_name\n";
	if (file_exists(($class_name . '.php'))) {
	    require_once $class_name . '.php';
		return true;
	}
	echo "not find file\n";
    return false;
};

// $obj  = new fun();
$obj  = new fun2();
