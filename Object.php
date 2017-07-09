<?php
$obj = (object) array('1' => 'foo', 
					"a" => "bbb");
var_dump(isset($obj->{'1'})); // outputs 'bool(false)'
var_dump(isset($obj->{'a'})); // outputs 'bool(true)'
var_dump(key($obj)); // outputs 'int(1)'
print($obj->a);


class foo
{
	public $a;
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$obj = new foo;


function arrayToObject( $array ){
  foreach( $array as $key => $value ){
    if( is_array( $value ) ) $array[ $key ] = arrayToObject( $value );
  }
  return (object) $array;
}


$obj = arrayToObject(array("a"=>"123",
  "b"=>"456"));
print($obj->a);