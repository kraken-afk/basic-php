<?php

/*============ If Statement ============*/
$grade = 100;


if ($grade === 100) 
    echo "You are Awesome 😲🥵".PHP_EOL;
elseif ($grade >= 75) 
    echo "Congrotulation, you pass the Exam.🎊🎉🎆".PHP_EOL;
else echo "Sorry, you fail the Exam.😢".PHP_EOL;



if ($grade === 100){
    echo "You are Awesome 😲🥵" . PHP_EOL;
} elseif ($grade >= 100) {
    echo "Congrotulation, you pass the Exam.🎊🎉🎆" . PHP_EOL;
} else {
    echo "Sorry, you fail the Exam.😢" . PHP_EOL;   
}



if ($grade === 100):
    echo "You are Awesome 😲🥵" . PHP_EOL;
    echo "yeayy";
elseif ($grade >= 75):
    echo "Congrotulation, you pass the Exam.🎊🎉🎆" . PHP_EOL;
else:
    echo "Sorry, you fail the Exam.😢" . PHP_EOL;
endif;

// hmmm, which are fancier ??,