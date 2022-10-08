<?php

/*============ Switch Statement ============*/

$grade = "A";

switch($grade) {
    case "A":
        echo "Congratss, you are amazing.🎉🎊";
        break;
    case "B":
    case "C": 
        echo "Congratss, You pass the exam.🎉";
        break;
    default: echo "sorry, you fail the exam.😢";
}

switch ($grade):
    case "A":
        echo "Congratss, you are amazing.🎉🎊";
        break;
    case "B":
    case "C":
        echo "Congratss, You pass the exam.🎉";
        break;
    default:
        echo "sorry, you fail the exam.😢";
endswitch;

// the second one is cooler;