<?php

$num = array(1, 2, 3, 4);
$names = ["Romeo", "kyoto", "Jaka", "Ono"];

var_dump($num);
echo "\n";
echo $names[0]."\n";
echo $names[1]."\n";
echo $names[2]."\n";
echo $names[3]."\n";
echo "\n";

// adding element to an array (will push it to last index)
$names[] = "Uking";
echo $names[4]."\n";

// counting an array length
echo count($names);
echo "\n";

// Array as a map

$map = array(
    "id" => "romeo",
    "name" => "Romeo Noveanre",
    "age" => 17
);

$kyoto = [
    "id" => "kyoto",
    "name" => "Kyoto Shouyo",
    "age" => 1
];

var_dump($map);
echo "\n";
var_dump($kyoto);
echo "\n";