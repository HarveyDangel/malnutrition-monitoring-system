<?php

// function weightForHeight ($weight, $sex, $height){
//     $result = 'normal';
//     return $result;
// }

function weightForHeight($ChildWeight, $sex, $ChildHeight)
{
    if ($sex == 'M') {
        switch ($ChildHeight) {
            case 45:
                if ($ChildWeight > 3.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 1.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 1.8) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 1.8) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 45.5:
                if ($ChildWeight > 3.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 1.8) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 1.8) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 46:
                if ($ChildWeight > 3.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 1.9) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 1.9) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 46.5:
                if ($ChildWeight > 3.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 47:
                if ($ChildWeight > 3.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 47.5:
                if ($ChildWeight > 3.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.1) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2.1) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 48:
                if ($ChildWeight > 3.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.2) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2.2) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 48.5:
                if ($ChildWeight > 4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.2) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2.2) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 49:
                if ($ChildWeight > 4.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.3) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2.3) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 49.5:
                if ($ChildWeight > 4.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.4) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2.4) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 50:
                if ($ChildWeight > 4.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.5) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2.5) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 50.5:
                if ($ChildWeight > 4.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.6) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2.6) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 51:
                if ($ChildWeight > 4.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.6) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2.6) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 51.5:
                if ($ChildWeight > 4.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.7) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2.7) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 52:
                if ($ChildWeight > 5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.8) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2.8) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 52.5:
                if ($ChildWeight > 5.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.9) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 2.9) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 53:
                if ($ChildWeight > 5.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 3) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 53.5:
                if ($ChildWeight > 5.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.1) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 3.1) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 54:
                if ($ChildWeight > 5.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 5.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.2) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 3.2) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 54.5:
                if ($ChildWeight > 5.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 5.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.3) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 3.3) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 55:
                if ($ChildWeight > 6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 5.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.5) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 3.5) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 55.5:
                if ($ChildWeight > 6.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 5.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.6) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 3.6) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 56:
                if ($ChildWeight > 6.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 5.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.7) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 3.7) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 56.5:
                if ($ChildWeight > 6.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 5.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.8) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 3.8) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 57:
                if ($ChildWeight > 6.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 6.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.9) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 3.9) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 57.5:
                if ($ChildWeight > 6.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 6.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 4) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 58:
                if ($ChildWeight > 7.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 6.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.2) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 4.2) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 58.5:
                if ($ChildWeight > 7.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 6.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.3) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 4.3) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 59:
                if ($ChildWeight > 7.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 6.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.4) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 4.4) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 59.5:
                if ($ChildWeight > 7.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 7.0) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.5) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 4.5) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 60:
                if ($ChildWeight > 7.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 7.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.6) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 4.6) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 60.5:
                if ($ChildWeight > 8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 7.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.7) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 4.7) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 61:
                if ($ChildWeight > 8.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 7.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.8) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 4.8) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 61.5:
                if ($ChildWeight > 8.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 7.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.9) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 4.9) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 62:
                if ($ChildWeight > 8.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 7.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 5) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 62:
                if ($ChildWeight > 8.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 7.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 5) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 62.5:
                if ($ChildWeight > 8.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 7.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.1) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 5.1) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 63:
                if ($ChildWeight > 8.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.2) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 5.2) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 63.5:
                if ($ChildWeight > 8.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 8.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.3) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 5.3) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 64:
                if ($ChildWeight > 9.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 8.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.4) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 5.4) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 64.5:
                if ($ChildWeight > 9.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 8.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.5) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 5.5) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 65:
                if ($ChildWeight > 9.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 8.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.6) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 5.6) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 65.5:
                if ($ChildWeight > 9.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 8.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.7) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 5.7) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 66:
                if ($ChildWeight > 9.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 8.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.7) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 5.7) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 66.5:
                if ($ChildWeight > 9.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.9) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 5.9) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 67:
                if ($ChildWeight > 10) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 6) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 67.5:
                if ($ChildWeight > 10.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.1) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 6.1) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 68:
                if ($ChildWeight > 10.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.2) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 6.2) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 68.5:
                if ($ChildWeight > 10.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.3) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 6.3) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 69:
                if ($ChildWeight > 10.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.4) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 6.4) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 69.5:
                if ($ChildWeight > 10.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.5) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 6.5) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 70:
                if ($ChildWeight > 10.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.5) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 6.5) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 70.5:
                if ($ChildWeight > 11.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.6) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 6.6) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 71:
                if ($ChildWeight > 11.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.7) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 6.7) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 71.5:
                if ($ChildWeight > 11.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.8) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 6.8) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 72:
                if ($ChildWeight > 11.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.9) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 6.9) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 72.5:
                if ($ChildWeight > 11.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 73:
                if ($ChildWeight > 11.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.1) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7.1) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 73.5:
                if ($ChildWeight > 11.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.1) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7.1) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 74:
                if ($ChildWeight > 12.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.2) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7.2) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 74.5:
                if ($ChildWeight > 12.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.3) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7.3) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 75:
                if ($ChildWeight > 12.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.4) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7.4) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 75.5:
                if ($ChildWeight > 12.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.5) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7.5) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 76:
                if ($ChildWeight > 12.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.5) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7.5) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 76.5:
                if ($ChildWeight > 12.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.6) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7.6) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 77:
                if ($ChildWeight > 12.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.7) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7.7) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 77.5:
                if ($ChildWeight > 13) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.9) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7.9) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 78:
                if ($ChildWeight > 13.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.8) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7.8) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 78.5:
                if ($ChildWeight > 13.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.9) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 7.9) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 79:
                if ($ChildWeight > 13.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 8) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 79.5:
                if ($ChildWeight > 13.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.1) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 8.1) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 80:
                if ($ChildWeight > 13.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.1) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 8.1) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 80.5:
                if ($ChildWeight > 13.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.2) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 8.2) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 81:
                if ($ChildWeight > 13.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.3) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 8.3) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 81.5:
                if ($ChildWeight > 13.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.4) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 8.4) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 82:
                if ($ChildWeight > 14) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.4) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 8.4) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 82.5:
                if ($ChildWeight > 14.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.5) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 8.5) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 83:
                if ($ChildWeight > 14.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.6) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 8.6) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 83.5:
                if ($ChildWeight > 14.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.7) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 8.7) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 84:
                if ($ChildWeight > 14.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.8) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 8.8) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 84.5:
                if ($ChildWeight > 14.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.9) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 8.9) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 85:
                if ($ChildWeight > 14.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 9) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            case 85.5:
                if ($ChildWeight > 15) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.1) {
                    $result = 'Underweight';
                    return $result;
                } else if ($ChildWeight <= 9.1) {
                    $result = 'Severely Underweight';
                    return $result;
                }
                break;
            default:
                $result = "Out of Range";
                return $result;
                break;
        }
    } else if ($sex == 'F') {
    } else {
        $result = 'Invalid Input';
        return $result;
    }
};
