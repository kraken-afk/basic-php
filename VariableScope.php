<?php

/*============ Variable Scope ============*/

/*
there is 3 Types Scope:
  - Global
  - Local
  - Static

  every block has own scope and cannot access variables from outside scope

  *  global
  PHP has global keyword, which used to take global variables to local
  scope : global $variable;
  *

  *  $GLOBALS
  PHP also has array that contains all variables, when we 
  declare a variable, the variable will saved in that array.
  $GLOBALS is a super global variables, which is it can accessed
  from all scope
  *

  * static
  Local variables has lifecycle when certain block executed,
  end after it, the variables will deleted.
  however when we use static keyword before declaring variables,
  the values of variables will keep alife even we re-execute the block
  *

*/

// access global variable
$name = "Romeo";

function sayHello() {
  global $name;
  echo PHP_EOL."Hello $name".PHP_EOL.PHP_EOL;
}

sayHello();

// static variable

function increment() {
  static $counter = 1;
  echo "counter - $counter".PHP_EOL;
  $counter++;
}

increment();
increment();
increment();
increment();