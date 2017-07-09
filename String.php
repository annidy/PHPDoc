<?php
echo 'this is a simple string';

// 可以录入多行
echo 'You can also have embedded newlines in 
strings this way as it is
okay to do';

// 输出： Arnold once said: "I'll be back"
echo 'Arnold once said: "I\'ll be back"';

// 输出： You deleted C:\*.*?
echo 'You deleted C:\\*.*?';

// 输出： You deleted C:\*.*?
echo 'You deleted C:\*.*?';

// 输出： This will not expand: \n a newline
echo 'This will not expand: \n a newline';

echo "This will not expand: \n ???a newline";

// 输出： Variables do not $expand $either
echo 'Variables do not $expand $either';

echo <<<FOOBAR
Hello World!
asfdasdf
asd
FOOBAR;

/* 含有变量的更复杂示例 */
class foo
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foooooo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'foo';

echo "$name";
echo "\n\n";
echo "{$foo->bar[1]}";

// 好神奇
echo "{$foo->$name}";
$myfoo = $foo->$name;
echo "$myfoo";



$juice = "apple";

echo "He drank some $juice juice.".PHP_EOL;
// Invalid. "s" is a valid character for a variable name, but the variable is $juice.
echo "He drank some juice made of ${juice}.".PHP_EOL;

echo "ab 10.2 delete"+1;