<?php

// echo 'HFA classification Model <hr>';

// $sex = 'male';

// $AgeByMonths = 5;
// $ChildCurrentHeight = 60;
// $result = heightForAge($AgeByMonths, $sex, $ChildCurrentHeight);

// echo 'HFA <br>';
// echo $result;


function heightForAge($AgeByMonths, $sex, $ChildCurrentHeight){
    if($sex == 'M'){
        switch ($AgeByMonths){
            case 0:
                if ($ChildCurrentHeight > 53.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 46){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 44.1){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 44.1){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 1:
                if ($ChildCurrentHeight > 58.6){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 50.7){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 48.8){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 48.8){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 2:
                if ($ChildCurrentHeight > 62.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 54.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 52.3){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 52.3){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 3:
                if ($ChildCurrentHeight > 65.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 57.2){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 55.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 55.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 4:
                if ($ChildCurrentHeight > 68){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 59.6){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 57.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 57.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 5:
                if ($ChildCurrentHeight > 70.1){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 61.6){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 59.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 59.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 6:
                if ($ChildCurrentHeight > 71.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 63.2){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 61.1){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 61.1){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 7:
                if ($ChildCurrentHeight > 73.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 64.7){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 62.6){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 62.6){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 8:
                if ($ChildCurrentHeight > 75){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 66.1){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 63.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 63.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 9:
                if ($ChildCurrentHeight > 76.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 67.4){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 65.1){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 65.1){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 10:
                if ($ChildCurrentHeight > 77.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 68.6){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 66.3){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 66.3){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 11:
                if ($ChildCurrentHeight > 79.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 69.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 67.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 67.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 12:
                if ($ChildCurrentHeight > 80.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 70.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 68.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 68.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 13:
                if ($ChildCurrentHeight > 81.8){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 72){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 69.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 69.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 14:
                if ($ChildCurrentHeight > 83){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 73){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 70.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 70.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 15:
                if ($ChildCurrentHeight > 84.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 74){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 71.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 71.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 16:
                if ($ChildCurrentHeight > 85.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 74.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 72.4){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 72.4){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 17:
                if ($ChildCurrentHeight > 86.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 75.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 73.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 73.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 18:
                if ($ChildCurrentHeight > 87.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 76.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 74.1){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 74.1){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 19:
                if ($ChildCurrentHeight > 88.8){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 77.6){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 74.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 74.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 20:
                if ($ChildCurrentHeight > 89.8){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 78.5){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 75.7){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 75.7){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 21:
                if ($ChildCurrentHeight > 90.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 79.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 76.4){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 76.4){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 22:
                if ($ChildCurrentHeight > 91.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 80.1){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 77.1){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 77.1){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 23:
                if ($ChildCurrentHeight > 92.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 80.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 77.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 77.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 24:
                if ($ChildCurrentHeight > 93.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 80.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 77.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 77.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 25:
                if ($ChildCurrentHeight > 94.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 81.6){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 78.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 78.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 26:
                if ($ChildCurrentHeight > 95.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 82.4){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 79.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 79.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 27:
                if ($ChildCurrentHeight > 96.1){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 83){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 79.8){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 79.8){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 28:
                if ($ChildCurrentHeight > 97){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 83.7){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 80.4){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 80.4){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 29:
                if ($ChildCurrentHeight > 97.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 84.4){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 81){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 81){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 30:
                if ($ChildCurrentHeight > 98.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 85){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 81.6){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 81.6){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 31:
                if ($ChildCurrentHeight > 99.6){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 85.6){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 82.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 82.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 32:
                if ($ChildCurrentHeight > 100.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 86.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 82.7){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 82.7){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 33:
                if ($ChildCurrentHeight > 101.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 86.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 83.3){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 83.3){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 34:
                if ($ChildCurrentHeight > 102){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 87.4){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 83.8){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 83.8){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 35:
                if ($ChildCurrentHeight > 102.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 88){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 84.3){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 84.3){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 36:
                if ($ChildCurrentHeight > 103.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 88.6){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 84.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 84.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 37:
                if ($ChildCurrentHeight > 104.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 89.1){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 85.4){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 85.4){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 38:
                if ($ChildCurrentHeight > 105){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 89.7){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 85.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 85.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 39:
                if ($ChildCurrentHeight > 105.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 90.2){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 86.4){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 86.4){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 40:
                if ($ChildCurrentHeight > 106.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 90.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 86.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 86.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 41:
                if ($ChildCurrentHeight > 107.1){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 91.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 87.4){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 87.4){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 42:
                if ($ChildCurrentHeight > 107.8){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 91.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 87.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 87.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 43:
                if ($ChildCurrentHeight > 108.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 92.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 88.3){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 88.3){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 44:
                if ($ChildCurrentHeight > 109.1){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 92.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 88.8){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 88.8){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 45:
                if ($ChildCurrentHeight > 109.8){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 93.4){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 89.3){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 89.3){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 46:
                if ($ChildCurrentHeight > 110.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 93.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 89.7){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 89.7){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 47:
                if ($ChildCurrentHeight > 111.1){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 94.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 90.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 90.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 48:
                if ($ChildCurrentHeight > 111.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 94.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 90.6){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 90.6){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 49:
                if ($ChildCurrentHeight > 112.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 95.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 91.1){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 91.1){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 50:
                if ($ChildCurrentHeight > 113){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 95.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 91.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 91.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 51:
                if ($ChildCurrentHeight > 113.6){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 96.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 92){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 92){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 52:
                if ($ChildCurrentHeight > 114.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 96.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 92.4){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 92.4){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 53:
                if ($ChildCurrentHeight > 114.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 97.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 92.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 92.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 54:
                if ($ChildCurrentHeight > 115.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 97.7){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 93.3){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 93.3){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 55:
                if ($ChildCurrentHeight > 116.1){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 98.2){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 93.8){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 93.8){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 56:
                if ($ChildCurrentHeight > 116.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 98.7){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 94.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 94.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 57:
                if ($ChildCurrentHeight > 117.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 99.2){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 94.6){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 94.6){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 58:
                if ($ChildCurrentHeight > 118){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 99.6){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 95.1){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 95.1){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 59:
                if ($ChildCurrentHeight > 118.6){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 100.1){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 95.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 95.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            default:
                $result = "Age Out of Range";
                return $result;
                break;
        }

    }
    if($sex == 'F'){
        switch ($AgeByMonths){
            case 0:
                if ($ChildCurrentHeight > 52.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 45.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 43.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 43.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 1:
                if ($ChildCurrentHeight > 57.6){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 49.7){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 47.7){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 47.7){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 2:
                if ($ChildCurrentHeight > 61.1){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 52.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 50.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 50.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 3:
                if ($ChildCurrentHeight > 64){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 55.5){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 53.4){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 53.4){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 4:
                if ($ChildCurrentHeight > 66.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 57.7){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 55.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 55.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 5:
                if ($ChildCurrentHeight > 68.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 59.5){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 57.3){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 57.3){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 6:
                if ($ChildCurrentHeight > 70.3){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 61.1){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 58.8){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 58.8){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 7:
                if ($ChildCurrentHeight > 71.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 62.6){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 60.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 60.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 8:
                if ($ChildCurrentHeight > 73.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 63.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 61.6){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 61.6){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 9:
                if ($ChildCurrentHeight > 75){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 65.2){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 62.8){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 62.8){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 10:
                if ($ChildCurrentHeight > 76.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 66.4){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 64){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 64){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 11:
                if ($ChildCurrentHeight > 77.8){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 67.6){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 65.1){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 65.1){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 12:
                if ($ChildCurrentHeight > 79.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 68.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 66.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 66.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 13:
                if ($ChildCurrentHeight > 80.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 69.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 67.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 67.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 14:
                if ($ChildCurrentHeight > 81.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 70.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 68.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 68.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 15:
                if ($ChildCurrentHeight > 83){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 71.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 69.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 69.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 16:
                if ($ChildCurrentHeight > 84.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 72.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 70.1){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 70.1){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 17:
                if ($ChildCurrentHeight > 85.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 73.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 71){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 71){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 18:
                if ($ChildCurrentHeight > 86.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 74.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 71.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 71.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 19:
                if ($ChildCurrentHeight > 87.6){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 75.7){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 72.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 72.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 20:
                if ($ChildCurrentHeight > 88.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 76.6){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 73.6){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 73.6){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 21:
                if ($ChildCurrentHeight > 89.8){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 77.4){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 74.4){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 74.4){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 22:
                if ($ChildCurrentHeight > 90.8){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 78.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 75.1){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 75.1){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 23:
                if ($ChildCurrentHeight > 91.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 79.1){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 75.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 75.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 24:
                if ($ChildCurrentHeight > 92.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 79.2){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 75.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 75.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 25:
                if ($ChildCurrentHeight > 93.1){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 79.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 76.7){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 76.7){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 26:
                if ($ChildCurrentHeight > 94.1){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 80.7){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 77.4){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 77.4){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 27:
                if ($ChildCurrentHeight > 95){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 81.4){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 78){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 78){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 28:
                if ($ChildCurrentHeight > 96){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 82.1){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 78.7){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 78.7){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 29:
                if ($ChildCurrentHeight > 96.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 82.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 79.4){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 79.4){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 30:
                if ($ChildCurrentHeight > 97.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 83.5){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 80){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 80){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 31:
                if ($ChildCurrentHeight > 98.6){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 84.2){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 80.6){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 80.6){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 32:
                if ($ChildCurrentHeight > 99.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 84.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 81.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 81.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 33:
                if ($ChildCurrentHeight > 100.3){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 85.5){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 81.8){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 81.8){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 34:
                if ($ChildCurrentHeight > 101.1){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 86.1){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 82.4){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 82.4){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 35:
                if ($ChildCurrentHeight > 101.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 86.7){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 83){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 83){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 36:
                if ($ChildCurrentHeight > 102.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 87.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 83.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 83.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 37:
                if ($ChildCurrentHeight > 103.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 87.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 84.1){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 84.1){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 38:
                if ($ChildCurrentHeight > 104.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 88.5){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 84.6){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 84.6){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 39:
                if ($ChildCurrentHeight > 105){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 89.1){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 85.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 85.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 40:
                if ($ChildCurrentHeight > 105.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 89.7){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 85.7){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 85.7){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 41:
                if ($ChildCurrentHeight > 106.4){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 90.3){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 88.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 88.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 42:
                if ($ChildCurrentHeight > 107.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 90.8){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 86.7){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 86.7){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 43:
                if ($ChildCurrentHeight > 107.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 91.4){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 87.3){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 87.3){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 44:
                if ($ChildCurrentHeight > 108.6){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 91.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 87.8){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 87.8){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 45:
                if ($ChildCurrentHeight > 109.3){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 92.4){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 88.3){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 88.3){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 46:
                if ($ChildCurrentHeight > 110){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 93){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 88.8){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 88.8){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 47:
                if ($ChildCurrentHeight > 110.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 93.5){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 89.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 89.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 48:
                if ($ChildCurrentHeight > 111.3){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 94){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 89.7){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 89.7){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 49:
                if ($ChildCurrentHeight > 112){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 94.5){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 90.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 90.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 50:
                if ($ChildCurrentHeight > 112.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 95){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 90.6){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 90.6){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 51:
                if ($ChildCurrentHeight > 113.3){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 95.5){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 91.1){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 91.1){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 52:
                if ($ChildCurrentHeight > 114){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 96){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 91.6){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 91.6){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 53:
                if ($ChildCurrentHeight > 114.6){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 96.5){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 92){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 92){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 54:
                if ($ChildCurrentHeight > 115.2){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 97){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 92.5){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 92.5){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 55:
                if ($ChildCurrentHeight > 115.9){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 97.5){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 92.9){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 92.9){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 56:
                if ($ChildCurrentHeight > 116.5){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 98){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 93.3){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 93.3){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 57:
                if ($ChildCurrentHeight > 117.1){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 98.4){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 93.8){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 93.8){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 58:
                if ($ChildCurrentHeight > 117.7){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 98.9){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 94.2){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 94.2){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            case 59:
                if ($ChildCurrentHeight > 118.3){
                    $result = 'Tall';
                    return $result;
                }
                else if ($ChildCurrentHeight > 99.4){
                    $result = 'Normal';
                    return $result;
                }
                else if ($ChildCurrentHeight > 94.6){
                    $result = 'Stunted';
                    return $result;
                }
                else if ($ChildCurrentHeight <= 94.6){
                    $result = 'Severely Stunted';
                    return $result;
                }
                break;
            default:
                $result = "Age Out of Range";
                return $result;
                break;
        }

    }
    else {
        $result = 'Invalid Input';
        return $result;

    }
};
