<?php

function weightForHeight ($weight, $sex, $height){
    $result = 'normal';
    return $result;
}

// function weightForHeight($ChildHeight, $sex, $ChildCurrentWeight){
//     if($sex == 'male'){
//         switch ($ChildHeight){
//             case 45:
//                 if ($ChildCurrentWeight > 3.4){
//                     $result = 'Obese';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 3){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 1.9){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 1.8){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 1.8){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 45:
//                 if ($ChildCurrentWeight > 3.4){
//                     $result = 'Obese';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 3.1){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 2.1){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 1.8){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 1.8){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             default:
//                 $result = "Out of Range";
//                 return $result;
//                 break;
//         }

//     }
//     if($sex == 'female'){
//         switch ($AgeByMonths){
//             case 0:
//                 if ($ChildCurrentWeight > 4.2){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 2.3){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 2){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 2){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 1:
//                 if ($ChildCurrentWeight > 5.5){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 3.1){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 2.7){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 2.7){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 2:
//                 if ($ChildCurrentWeight > 6.6){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 3.8){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 3.4){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 3.4){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 3:
//                 if ($ChildCurrentWeight > 7.5){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 4.4){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 4){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 4){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 4:
//                 if ($ChildCurrentWeight > 8.2){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 4.9){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 4.4){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 4.4){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 5:
//                 if ($ChildCurrentWeight > 8.8){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 5.3){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 4.8){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 4.8){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 6:
//                 if ($ChildCurrentWeight > 9.3){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 5.6){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 5.1){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 5.1){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 7:
//                 if ($ChildCurrentWeight > 9.8){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 5.9){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 5.1){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 5.1){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 8:
//                 if ($ChildCurrentWeight > 10.2){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 6.2){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 5.6){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 5.6){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 9:
//                 if ($ChildCurrentWeight > 10.5){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 6.4){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 5.8){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 5.8){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 10:
//                 if ($ChildCurrentWeight > 10.9){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 6.6){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 5.9){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 5.9){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 11:
//                 if ($ChildCurrentWeight > 11.2){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 6.8){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 6.1){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 6.1){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 12:
//                 if ($ChildCurrentWeight > 11.5){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 6.9){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 6.3){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 6.3){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 13:
//                 if ($ChildCurrentWeight > 11.8){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 7.1){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 6.4){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 6.4){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 14:
//                 if ($ChildCurrentWeight > 12.1){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 7.3){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 6.6){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 6.6){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 15:
//                 if ($ChildCurrentWeight > 12.4){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 7.5){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 6.7){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 6.7){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 16:
//                 if ($ChildCurrentWeight > 12.6){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 7.6){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 6.9){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 6.9){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 17:
//                 if ($ChildCurrentWeight > 12.9){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 7.8){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 7){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 7){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 18:
//                 if ($ChildCurrentWeight > 13.2){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 7.2){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 7.2){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 19:
//                 if ($ChildCurrentWeight > 13.5){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.1){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 7.3){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 7.3){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 20:
//                 if ($ChildCurrentWeight > 13.7){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.3){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 7.5){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 7.5){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 21:
//                 if ($ChildCurrentWeight > 14){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.5){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 7.6){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 7.6){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 22:
//                 if ($ChildCurrentWeight > 14.3){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.6){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 7.8){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 7.8){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 23:
//                 if ($ChildCurrentWeight > 14.6){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.8){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 7.9){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 7.9){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 24:
//                 if ($ChildCurrentWeight > 14.8){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.9){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.1){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 8.1){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 25:
//                 if ($ChildCurrentWeight > 15.1){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.1){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.2){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 8.2){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 26:
//                 if ($ChildCurrentWeight > 15.4){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.3){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.4){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 8.4){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 27:
//                 if ($ChildCurrentWeight > 15.7){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.4){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.5){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 8.5){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 28:
//                 if ($ChildCurrentWeight > 16){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.6){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.6){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 8.6){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 29:
//                 if ($ChildCurrentWeight > 16.2){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.7){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.8){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 8.8){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 30:
//                 if ($ChildCurrentWeight > 16.5){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.9){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 8.9){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 8.9){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 31:
//                 if ($ChildCurrentWeight > 16.8){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 9){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 32:
//                 if ($ChildCurrentWeight > 17.1){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.2){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.1){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 9.1){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 33:
//                 if ($ChildCurrentWeight > 17.3){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.3){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.3){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 9.3){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 34:
//                 if ($ChildCurrentWeight > 17.6){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.4){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.4){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 9.4){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 35:
//                 if ($ChildCurrentWeight > 17.9){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.6){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.5){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 9.5){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 36:
//                 if ($ChildCurrentWeight > 18.1){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.7){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.6){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 9.6){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 37:
//                 if ($ChildCurrentWeight > 18.4){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.8){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.7){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 9.7){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 38:
//                 if ($ChildCurrentWeight > 18.7){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.8){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 9.8){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 39:
//                 if ($ChildCurrentWeight > 19){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.1){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 9.9){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 9.9){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 40:
//                 if ($ChildCurrentWeight > 19.2){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.2){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.1){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 10.1){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 41:
//                 if ($ChildCurrentWeight > 19.5){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.4){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.2){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 10.2){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 42:
//                 if ($ChildCurrentWeight > 19.8){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.5){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.3){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 10.3){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 43:
//                 if ($ChildCurrentWeight > 20.1){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.6){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.4){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 10.4){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 44:
//                 if ($ChildCurrentWeight > 20.4){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.7){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.5){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 10.5){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 45:
//                 if ($ChildCurrentWeight > 20.7){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.9){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.6){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 10.6){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 46:
//                 if ($ChildCurrentWeight > 20.9){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 12){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.7){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 10.7){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 47:
//                 if ($ChildCurrentWeight > 21.2){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 12.1){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.8){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 10.8){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 48:
//                 if ($ChildCurrentWeight > 21.5){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 12.2){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 10.9){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 10.9){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 49:
//                 if ($ChildCurrentWeight > 21.8){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 12.3){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 11){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 50:
//                 if ($ChildCurrentWeight > 22.1){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 12.4){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.1){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 11.1){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 51:
//                 if ($ChildCurrentWeight > 22.4){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 12.6){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.2){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 11.2){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 52:
//                 if ($ChildCurrentWeight > 22.6){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 12.7){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.3){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 11.3){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 53:
//                 if ($ChildCurrentWeight > 22.9){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 12.8){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.4){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 11.4){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 54:
//                 if ($ChildCurrentWeight > 23.2){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 12.9){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.5){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 11.5){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 55:
//                 if ($ChildCurrentWeight > 23.5){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 13.1){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.6){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 11.6){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 56:
//                 if ($ChildCurrentWeight > 23.8){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 13.2){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.7){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 11.7){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 57:
//                 if ($ChildCurrentWeight > 24.1){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 13.3){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.8){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 11.8){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 58:
//                 if ($ChildCurrentWeight > 24.4){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 13.4){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 11.9){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 11.9){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             case 59:
//                 if ($ChildCurrentWeight > 24.6){
//                     $result = 'Overweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 13.5){
//                     $result = 'Normal';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight > 12){
//                     $result = 'Underweight';
//                     return $result;
//                 }
//                 else if ($ChildCurrentWeight <= 12){
//                     $result = 'Severely Underweight';
//                     return $result;
//                 }
//                 break;
//             default:
//                 $result = "Age Out of Range";
//                 return $result;
//                 break;
//         }

//     }
    
// };
