<?php

/*============ String Function ============*/

// list of String Function:
/*

  join() / implode()   - merge an array to string

  explode()          - split a string to an array

  strtolower()       - string to lowercase

  strtoupper()       - string to uppercase

  substr()           - take half of the string

  trim()             - remove whitespace

*/

var_dump(join(" - ", [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
var_dump(explode(" ", "Romeo Noveanre Kyoto"));
var_dump(strtolower("ROMEO"));
var_dump(strtoupper("romeo"));
var_dump(substr("Romeo Noveanre", 0, 5));
var_dump(trim("           romeo          "));