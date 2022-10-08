<!-- Expression-Statement-Block.php -->

<?php
 
 /*==================== Expression ====================*/
/*
Expresion => Anything that have value
Eg:
    $a = 5; <- 5 is an expression
    $b = $a; <- this also is an expression bcs $a have 5

    function getValue() {
        return 100;
    }

    $value = getValue(); <- this is expression, bcs the function return 100;

 */


 /*==================== Statement ====================*/
 /*
Statement => is like an complete sentence
Eg:
    $name = "romeo noveanre"; <- this is an statement, it has an expression.
    so expression is part of statement

    $value = getValue(); <- this also statement;

    echo $name; <- this is statement

    NOTE: statement usually followed by ; sign;
 */


 /*==================== Block ====================*/
 /*
Block => is an area in between curly bracket {Block}
Eg: 
    function log() {            *Start Block*
        $number = 100;  *Statement*
        echo $number;   *Statement*
        return $number; *Statement*
    }                           *End Block*

 */
