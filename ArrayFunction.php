<?php

/*============ Array Function ============*/
// Array function list:
/* 

  array_keys()    - take all keys from the array
  array_values()  - take all values from the array
  array_map()     - change all the values with callback function
  sort()          - shorting
  rsort()         - reverse shorting
  shuffle()       - change the position of data from an array to a random position

*/

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

var_dump(array_map(fn($values) => $values * 10, $array));

rsort($array);
var_dump($array);

var_dump(array_keys($array));
var_dump(array_values($array));

$person = ["firstName" => "Romeo", "lastName" => "Noveanre"];
var_dump(array_keys($person));
var_dump(array_values($person));