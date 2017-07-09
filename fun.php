<?php

$makefoo = true;

/* 不能在此处调用foo()函数，
   因为它还不存在，但可以调用bar()函数。*/

bar();

foo(); // can't be work!

{
  function foo()
  {
    echo "I don't exist until program execution reaches me.\n";
  }
}

foo();

function bar()
{
  echo "I exist immediately upon program start.\n";
}


class fun
{

};