<?php

/*============ Reference ============*/
// its like shortcut of one variables to other variables
// to use reference, use &

// assign by Reference
$name = "Romeo";
$otherName = &$name;
$otherName = "kyoto";

echo $otherName.PHP_EOL;


// pass by Reference

$num = 1;
function increment(int &$num) {
  $num++;
}

increment($num);
echo $num.PHP_EOL;


// return by reference

function &getValue(): int {
  static $value = 100;
  return $value;
}

$a = &getValue(); // 100;
echo $a.PHP_EOL;

$a = 200; //the return on &getValue() will change

$b = &getValue().PHP_EOL;
echo $b;
