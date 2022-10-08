<?php

// single line teks
echo 'Name : ';
echo 'Romeo Noveanre';

echo "\n\nMy name \n is \n\t Romeo\n\n";
// single quote doesnt supporting escape char



// multiline teks

// heredoc method
echo <<<TEXT
this is a long text, you may not
using enter character to make an enter space,
and you can write as long as you want.
TEXT;
echo "\n\n";
// nowdoc  
echo <<<'TEXT'
this is a long text, you may not
using enter character to make an enter space,
and you can write as long as you want.
TEXT; 

// nowdoc doesnt support parsing variable
?>