<?php 

/*============ For Loop ============*/
for ($counter = 1;$counter <= 10;$counter++) {
  echo "PHP For Loop $counter 🥳🥳".PHP_EOL;
}

// Alternative:
for ($counter = 1; $counter <= 10; $counter++):
  echo "PHP For Loop $counter 🥳🥳" . PHP_EOL;
endfor;
echo PHP_EOL;

/*============ While Loop ============*/
$c = 0;
while($c <= 20){
  echo "PHP While Loop $c 😋";
  $c++;
}

// Alternative
while ($c <= 20):
  echo "PHP While Loop $c 😋";
  $c++;
endwhile;
echo PHP_EOL.PHP_EOL;

/*============ Do While Loop ============*/
$c = 100;
do {
  echo "PHP Do While $c 👾".PHP_EOL.PHP_EOL;
} while ($c <= 10);


/*============ Break & Continue ============*/
// Break:
// break the entire loop;
for ($counter = 1; true; $counter++):
  echo "Break Loop: $counter".PHP_EOL;
  if ($counter === 10) break;
endfor;

// continue:
// skipping the loop;

echo PHP_EOL."Printing odd number".PHP_EOL;

for ($counter = 1; $counter <= 100; $counter++):
  if ($counter % 2 === 0) continue;
  echo "odd number: $counter".PHP_EOL;
endfor;
echo PHP_EOL;


/*============ For Each Loop ============*/
$names = ["Romeo", "Noveanre", "Kyoto", "Shibuya"];

// foreach ($names as $name) {
//   echo "Name: $name".PHP_EOL;
// }

foreach ($names as $index => $name):
  echo "Index $index: $name".PHP_EOL;
endforeach;
echo PHP_EOL;


$person = ["firstName" => "Romeo", "lastName" => "Noveanre"];

foreach($person as $key => $value):
  echo "$key: $value".PHP_EOL;
endforeach;
echo PHP_EOL;
