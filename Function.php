<?php

/*============ Function ============*/

sayHello("Romeo", "Noveanre");
sayHello("Kyoto");
sayHello();

sum(50, 50); //100
sum("50", "30"); //70
sum(false, true);// 1 + 0 = 1;
// sum([], []); error




function sayHello($firstName = null, $lastName = "") {
  echo "Status: " . isset($firstName) . " : ";
  if (isset($firstName)) :
    echo "Hello $firstName $lastName" . PHP_EOL;
  else :
    echo "Hello Anonymous" . PHP_EOL;
  endif;
  echo PHP_EOL;
}

// Type declaration
function sum(int $a, int $b) {
  $sum = $a + $b;
  echo "Sum of $a + $b = $sum".PHP_EOL;
}

echo PHP_EOL;

/*============ Valid types ============*/
/*

  - Class / Interface
  - self
  - array
  - callable
  - bool
  - float
  - int
  - string
  - iterable
  - object

*/

/*============ Variable Length Argument List ============*/
// in javascript, its similiar to Spread Operator

function sumALl(...$numbers) {
  $sum = 0;
  foreach($numbers as $n):
    $sum += $n;
  endforeach;
  echo "Sum of ".implode(" + ", $numbers)."  = $sum".PHP_EOL.PHP_EOL;
}

$arrayOfNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

sumAll(1, 2, 3, 4, 5);
sumAll(...$arrayOfNumbers);



/*============ Function Return Value ============*/
// for return type declaration, use colon after parameter bracket

function addition(int ...$numbers): int {
  $sum = 0;
  foreach($numbers as $n):
    $sum += $n;
  endforeach;
  return $sum;
}

// return type declaration
function helloWorld(): string {
  return "Hello, World!🥳".PHP_EOL.PHP_EOL;
}

var_dump(addition(1, 2, 3, 4, 5, 6, 7));
echo PHP_EOL;
echo helloWorld();

/*============ Variable Function ============*/
function foo(): string {
  return "FOO".PHP_EOL.PHP_EOL;
}
function bar(): string {
  return "BAR" . PHP_EOL . PHP_EOL;
}

$varFun1 = "foo";
$varFun2 = "bar";

echo $varFun1();
echo $varFun2();

// example:

function filter(string $name, $filter) {
  echo $filter($name).PHP_EOL;
}

function helloFun(string $name): string {
  return "Hello $name";
}

filter("romeo", "helloFun");
filter("Romeo", "strtoupper");
filter("Romeo", "strtolower");

/*============ Anonymous Function ============*/
//NOTE: Anonymous function cannot access global variable

filter("Noveanre", function(string $name): string {
  return strtoupper($name);
});

// example how to access global variable with anonymous function:
// use keyword make us enable to access global variable;
// function() use($globalVariable)

$firstName = "Romeo";
$lastName = "Noveanre";

filter("Kyoto", function() use($firstName, $lastName): string {
  return "$firstName $lastName";
});


/*============ Arrow Function as Anonymous Function ============*/
// Arrow function can access global variable, however
// Arrow function cannot execute complicate code.
// use fn() => return something;

filter("", fn() => strtoupper("$firstName $lastName"));
echo PHP_EOL;


/*============ Callback Function ============*/
//Type declarative -> callable
//func(callable $var)
// call_user_func($func, $argument);

function hello(callable $func) {
  echo $func();
}

hello(fn() => "Hello World!".PHP_EOL);


/*============ Recursive Function ============*/
// NOTE: Recursive func can make Memory Error;

function factorialFunc(int $value): int {
  $total = 1;
  for ($i = 1;$i <= $value; $i++):
    $total *= $i;
  endfor;
  return $total;
}

function factorialRecursive(int $value): int {
  return $value === 1 ? 1 : $value * factorialRecursive($value - 1);
}

echo factorialFunc(5).PHP_EOL;
echo factorialRecursive(5).PHP_EOL;

// example of memory error because Recursive function

function deepLoop(int $value): int {
  if ($value === 0):
    return 0;
  else:
    echo "deepLoop - $value".PHP_EOL;
    return deepLoop($value - 1);
  endif;
}

deepLoop(3000000);