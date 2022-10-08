<?php

/*============ Goto Operator ============*/
// goto operator can jump to a specific code program
// to use it, create label string: (colon)

goto a;
echo "Hello World!".PHP_EOL;

a:
echo "Hello a".PHP_EOL;

$counter = 0;
while (true):
  $counter++;
  echo "while loop $counter".PHP_EOL;
  if ($counter === 10) goto end;
endwhile;

end:
echo "this is end".PHP_EOL;