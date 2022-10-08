<?php 
// type data null

$name = "Romeo Noveanre";
echo "name : ";
echo $name."\n";
$name = null;

$age = null;
echo "age : ";
echo $age;

// checking data is null or not, use is_null($variable);

echo 'is name null? : ';
var_dump(is_null($name));
echo "\n";

// deleting a variable, use unset($variable);

$name = "Romeo";
define("VRB", 17);
echo $name." is ";
echo VRB;
echo " y/o\n";

unset($name);


// isset($variable) function is checking a variable is axist or not null;

echo 'is $variable exist? : ';
var_dump(isset($name));

?>  