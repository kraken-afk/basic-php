<?php

/*============ Require And Include ============*/

// if the file is null:
// Require will error 
// Include will give warning but the program still running

//there is require_once & include_once too..

require "./Lib/MyFunc.php";

echo sayHello("Romeo Noveanre");