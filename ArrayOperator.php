<?php

// $arrayA + $arrayB = union, for merging array;
$numA = [1, 2, 3, 4, 5];
$numB = [6, 7, 8, 9, 10];
$numC = $numA + $numB;

// var_dump($numC);

/* Union Operator; + */

$firstName = [
    "firstName" => "Romeo",
];

$lastName = [
    "firstName" => "Kyoto", // <- will ignore 
    "lastName" => "Noveanre",
];

$fullName = $firstName + $lastName;

// var_dump($firstName + $lastName);
// var_dump($fullName);


/* Equality and Identity; == / === */

$a = [
    "first" => "Romeo",
    "last" => "Noveanre"
];

$b = [
    "last" => "Noveanre",
    "first" => "Romeo",
];

// var_dump($a == $b); // true
// var_dump($a === $b); // false


/* Not Equal; != / <> */

var_dump($a != $b); //false
var_dump($a <> $b); //false
var_dump($a !== $b); //true