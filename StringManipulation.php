<?php
// Manipulation String

/*============ Dot Operator ============*/
// for combine String or any;

$name = "Romeo Noveanre";
echo "Name : ".$name.PHP_EOL; // <- PHP_EOL is an constant in php, 
echo "Grades : ". 80 ."\n\n";   // EOL stand for End Of Line, or simply Enter \n;


/*============ Converting Data ============*/
// Integer to String:
    $ValueString = (string)100;
    var_dump($ValueString);

//String to Integer:
    $valueNumber = (int)"100";
    var_dump($valueNumber);

// String to Float 
    $floatValue = (float)"100.1";
    var_dump($floatValue);

// NOTE: if the data invalid, php will convert to Integer 0;


/*============ Access Character ============*/
//in php, string have quiet same behavior like array;
//Eg:
    echo $name[0].PHP_EOL;
    echo $name[1].PHP_EOL;
    echo $name[2].PHP_EOL;
    echo $name[3].PHP_EOL;
    echo $name[4].PHP_EOL;


/*============ Variable Parsing ============*/
echo "Hello $name 😋, PHP is awesome✨🎉🎊".PHP_EOL;

/*============ Curly Brace ============*/
$var = "variable";
echo "These {$var}s are cool 🥶👾".PHP_EOL;