<?php

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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 1.8) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 1.8) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 1.9) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.1) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.2) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.2) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.3) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.4) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.5) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.6) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.6) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.7) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.8) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.9) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.1) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.2) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.3) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.5) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.6) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.7) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.8) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.9) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.2) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.3) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.4) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.5) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.6) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.7) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.8) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.9) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.1) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.2) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.3) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.4) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.5) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.6) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.7) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.7) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.9) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.1) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.2) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.3) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.4) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.5) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.5) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.6) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.7) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.8) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.9) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.1) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.1) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.2) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.3) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.4) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.5) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.5) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.6) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.7) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.9) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.8) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.9) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.1) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.1) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.2) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.3) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.4) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.4) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.5) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.6) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.7) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.8) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.9) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 86:
                if ($ChildWeight > 15.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 86.5:
                if ($ChildWeight > 15.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 87:
                if ($ChildWeight > 15.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 87.5:
                if ($ChildWeight > 15.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 88:
                if ($ChildWeight > 15.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 88.5:
                if ($ChildWeight > 15.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 89:
                if ($ChildWeight > 16.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 89.5:
                if ($ChildWeight > 16.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 90:
                if ($ChildWeight > 16.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 90.5:
                if ($ChildWeight > 16.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 91:
                if ($ChildWeight > 16.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 91.5:
                if ($ChildWeight > 16.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 92:
                if ($ChildWeight > 17) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 92.5:
                if ($ChildWeight > 17.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 93:
                if ($ChildWeight > 17.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 93.5:
                if ($ChildWeight > 17.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 94:
                if ($ChildWeight > 17.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 94.5:
                if ($ChildWeight > 17.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 95:
                if ($ChildWeight > 17.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 95.5:
                if ($ChildWeight > 18) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 96:
                if ($ChildWeight > 18.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 96.5:
                if ($ChildWeight > 18.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 97:
                if ($ChildWeight > 18.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 17) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 97.5:
                if ($ChildWeight > 18.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 17.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 98:
                if ($ChildWeight > 18.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 17.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 98.5:
                if ($ChildWeight > 19.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 17.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 99:
                if ($ChildWeight > 19.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 17.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 99.5:
                if ($ChildWeight > 19.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 17.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 100:
                if ($ChildWeight > 19.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 18) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 100.5:
                if ($ChildWeight > 19.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 18.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 101:
                if ($ChildWeight > 20) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 18.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 101.5:
                if ($ChildWeight > 20.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 18.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 102:
                if ($ChildWeight > 20.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 18.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 102.5:
                if ($ChildWeight > 20.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 18.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 103:
                if ($ChildWeight > 20.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 19) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 103.5:
                if ($ChildWeight > 21) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 19.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 104:
                if ($ChildWeight > 21.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 19.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 104.5:
                if ($ChildWeight > 21.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 19.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 105:
                if ($ChildWeight > 21.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 19.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 105.5:
                if ($ChildWeight > 21.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 20) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 106:
                if ($ChildWeight > 22.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 20.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 106.5:
                if ($ChildWeight > 22.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 20.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 107:
                if ($ChildWeight > 22.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 20.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 107.5:
                if ($ChildWeight > 22.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 20.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 108:
                if ($ChildWeight > 23.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 21) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 108.5:
                if ($ChildWeight > 23.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 21.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 109:
                if ($ChildWeight > 23.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 21.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 15) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 109.5:
                if ($ChildWeight > 23.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 21.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 15.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 14) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 14) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 110:
                if ($ChildWeight > 24.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 21.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 15.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 14.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 14.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 110.5:
                if ($ChildWeight > 24.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 22.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 15.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 14.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 14.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 111:
                if ($ChildWeight > 25) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 22.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 15.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 14.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 14.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 111.5:
                if ($ChildWeight > 25.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 22.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 15.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 14.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 14.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 112:
                if ($ChildWeight > 25.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 23.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 16.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 14.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 14.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 112.5:
                if ($ChildWeight > 25.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 23.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 16.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 14.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 14.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 113:
                if ($ChildWeight > 26) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 23.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 16.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 113.5:
                if ($ChildWeight > 26.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 23.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 16.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 114:
                if ($ChildWeight > 26.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 24.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 16.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 114.5:
                if ($ChildWeight > 26.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 24.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 16.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 115:
                if ($ChildWeight > 27.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 24.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 115.5:
                if ($ChildWeight > 27.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 24.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 116:
                if ($ChildWeight > 27.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 25.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 116.5:
                if ($ChildWeight > 28) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 25.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 117:
                if ($ChildWeight > 28.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 25.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 117.5:
                if ($ChildWeight > 28.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 25.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 118:
                if ($ChildWeight > 28.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 26.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 118.5:
                if ($ChildWeight > 29.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 26.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 18.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 119:
                if ($ChildWeight > 29.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 26.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 18.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 119.5:
                if ($ChildWeight > 29.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 26.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 18.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 120:
                if ($ChildWeight > 30.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 27.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 18.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 17) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 17) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            default:
                $result = "Out of Range";
                return $result;
                break;
        }
    } else if ($sex == 'F') {
        switch ($ChildHeight) {
            case 45:
                if ($ChildWeight > 3.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 1.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 1.8) {
                    $result = 'Severely Wasted';
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
                } else if ($ChildWeight > 1.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 1.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 46:
                if ($ChildWeight > 3.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 1.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 1.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 46.5:
                if ($ChildWeight > 3.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 47:
                if ($ChildWeight > 3.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 47.5:
                if ($ChildWeight > 3.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 48:
                if ($ChildWeight > 4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 48.5:
                if ($ChildWeight > 4.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 3.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.3) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.3) {
                    $result = 'Severely Wasted';
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
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 50:
                if ($ChildWeight > 4.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 50.5:
                if ($ChildWeight > 4.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 51:
                if ($ChildWeight > 4.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 2.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 51.5:
                if ($ChildWeight > 4.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 52:
                if ($ChildWeight > 5.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 52.5:
                if ($ChildWeight > 5.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 2.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 2.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 53:
                if ($ChildWeight > 5.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 4.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 53.5:
                if ($ChildWeight > 5.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 54:
                if ($ChildWeight > 5.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 5.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 54.5:
                if ($ChildWeight > 5.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 5.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 55:
                if ($ChildWeight > 6.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 5.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 55.5:
                if ($ChildWeight > 6.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 5.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 56:
                if ($ChildWeight > 6.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 5.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 3.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 56.5:
                if ($ChildWeight > 6.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 57:
                if ($ChildWeight > 6.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 6.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 57.5:
                if ($ChildWeight > 7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 6.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 3.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 3.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 58:
                if ($ChildWeight > 7.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 6.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 58.5:
                if ($ChildWeight > 7.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 6.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 59:
                if ($ChildWeight > 7.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 6.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 59.5:
                if ($ChildWeight > 7.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 6.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 4.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.3) {
                    $result = 'Severely Wasted';
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
                } else if ($ChildWeight > 4.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.4) {
                    $result = 'Severely Wasted';
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
                } else if ($ChildWeight > 4.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 61:
                if ($ChildWeight > 8.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 7.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 61.5:
                if ($ChildWeight > 8.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 7.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 62:
                if ($ChildWeight > 8.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 7.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 62.5:
                if ($ChildWeight > 8.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 7.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 4.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 4.9) {
                    $result = 'Severely Wasted';
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
                } else if ($ChildWeight > 5.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 63.5:
                if ($ChildWeight > 9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 8.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.1) {
                    $result = 'Severely Wasted';
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
                } else if ($ChildWeight > 5.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 64.5:
                if ($ChildWeight > 9.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 8.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 65:
                if ($ChildWeight > 9.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 8.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 5.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.4) {
                    $result = 'Severely Wasted';
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
                } else if ($ChildWeight > 5.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 66:
                if ($ChildWeight > 9.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 8.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.5) {
                    $result = 'Severely Wasted';
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
                } else if ($ChildWeight > 6.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 67:
                if ($ChildWeight > 10) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 67.5:
                if ($ChildWeight > 10.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.8) {
                    $result = 'Severely Wasted';
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
                } else if ($ChildWeight > 6.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 5.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 5.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 68.5:
                if ($ChildWeight > 10.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 69:
                if ($ChildWeight > 10.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 69.5:
                if ($ChildWeight > 10.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 70:
                if ($ChildWeight > 10.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 9.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 70.5:
                if ($ChildWeight > 11) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 71:
                if ($ChildWeight > 11.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 6.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 71.5:
                if ($ChildWeight > 11.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 72:
                if ($ChildWeight > 11.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 72.5:
                if ($ChildWeight > 11.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 73:
                if ($ChildWeight > 11.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 73.5:
                if ($ChildWeight > 11.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 74:
                if ($ChildWeight > 11.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 74.5:
                if ($ChildWeight > 12) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 10.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 6.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 6.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 75:
                if ($ChildWeight > 12.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 75.5:
                if ($ChildWeight > 12.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 76:
                if ($ChildWeight > 12.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 76.5:
                if ($ChildWeight > 12.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 77:
                if ($ChildWeight > 12.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 7.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 77.5:
                if ($ChildWeight > 12.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 78:
                if ($ChildWeight > 12.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 78.5:
                if ($ChildWeight > 13) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 79:
                if ($ChildWeight > 13.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 11.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 79.5:
                if ($ChildWeight > 13.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 80:
                if ($ChildWeight > 13.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 80.5:
                if ($ChildWeight > 13.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 81:
                if ($ChildWeight > 13.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 7.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 7.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 81.5:
                if ($ChildWeight > 13.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 82:
                if ($ChildWeight > 13.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 82.5:
                if ($ChildWeight > 14.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 83:
                if ($ChildWeight > 14.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 12.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 8.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 83.5:
                if ($ChildWeight > 14.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 84:
                if ($ChildWeight > 14.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 84.5:
                if ($ChildWeight > 14.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 85:
                if ($ChildWeight > 14.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 85.5:
                if ($ChildWeight > 15) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 86:
                if ($ChildWeight > 15.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 86.5:
                if ($ChildWeight > 15.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 13.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 8.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 8.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 87:
                if ($ChildWeight > 15.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 87.5:
                if ($ChildWeight > 15.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 9.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 88:
                if ($ChildWeight > 15.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 88.5:
                if ($ChildWeight > 16) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 89:
                if ($ChildWeight > 16.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 89.5:
                if ($ChildWeight > 16.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 14.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 90:
                if ($ChildWeight > 16.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 90.5:
                if ($ChildWeight > 16.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 91:
                if ($ChildWeight > 16.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 91.5:
                if ($ChildWeight > 17) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 9.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 9.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 92:
                if ($ChildWeight > 17.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 92.5:
                if ($ChildWeight > 17.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 10.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 93:
                if ($ChildWeight > 17.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 15.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 93.5:
                if ($ChildWeight > 17.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 94:
                if ($ChildWeight > 17.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 94.5:
                if ($ChildWeight > 18) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 95:
                if ($ChildWeight > 18.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 95.5:
                if ($ChildWeight > 18.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 96:
                if ($ChildWeight > 18.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 16.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 96.5:
                if ($ChildWeight > 18.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 17) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 97:
                if ($ChildWeight > 18.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 17.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 11.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 10.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 10.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 97.5:
                if ($ChildWeight > 19.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 17.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 98:
                if ($ChildWeight > 19.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 17.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 98.5:
                if ($ChildWeight > 19.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 17.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 99:
                if ($ChildWeight > 19.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 17.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 99.5:
                if ($ChildWeight > 19.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 18) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 100:
                if ($ChildWeight > 20) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 18.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 100.5:
                if ($ChildWeight > 20.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 18.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 101:
                if ($ChildWeight > 20.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 18.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 101.5:
                if ($ChildWeight > 20.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 18.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 12.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 102:
                if ($ChildWeight > 20.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 18.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 11.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 11.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 102.5:
                if ($ChildWeight > 21) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 19) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 103:
                if ($ChildWeight > 21.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 19.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 103.5:
                if ($ChildWeight > 21.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 19.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 104:
                if ($ChildWeight > 21.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 19.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.5) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 104.5:
                if ($ChildWeight > 21.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 19.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 105:
                if ($ChildWeight > 22.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 20) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 105.5:
                if ($ChildWeight > 22.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 20.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 13.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 106:
                if ($ChildWeight > 22.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 20.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 12.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 12.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 106.5:
                if ($ChildWeight > 22.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 20.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 107:
                if ($ChildWeight > 23.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 20.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 107.5:
                if ($ChildWeight > 23.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 21.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 108:
                if ($ChildWeight > 23.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 21.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 108.5:
                if ($ChildWeight > 23.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 21.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 109:
                if ($ChildWeight > 24.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 21.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 14.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 109.5:
                if ($ChildWeight > 24.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 22) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 15) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 110:
                if ($ChildWeight > 24.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 22.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 15.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 13.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 13.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 110.5:
                if ($ChildWeight > 25.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 22.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 15.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 14.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 14.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 111:
                if ($ChildWeight > 25.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 23.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 15.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 14.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 14.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 111.5:
                if ($ChildWeight > 26) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 23.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 15.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 14.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 14.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 112:
                if ($ChildWeight > 26.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 23.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 18.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 14.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 14.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 112.5:
                if ($ChildWeight > 26.5) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 23.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 16.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 14.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 14.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 113:
                if ($ChildWeight > 26.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 24.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 16.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 113.5:
                if ($ChildWeight > 27.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 24.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 16.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 114:
                if ($ChildWeight > 27.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 24.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 16.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.3) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.3) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 114.5:
                if ($ChildWeight > 27.8) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 25) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 16.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 115:
                if ($ChildWeight > 28.1) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 25.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.6) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.6) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 115.5:
                if ($ChildWeight > 28.4) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 25.5) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17.2) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 116:
                if ($ChildWeight > 28.7) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 25.8) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 15.9) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 15.9) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 116.5:
                if ($ChildWeight > 29) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 26.1) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16.1) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16.1) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 117:
                if ($ChildWeight > 29.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 26.3) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17.7) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 117.5:
                if ($ChildWeight > 29.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 26.6) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 17.9) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16.4) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16.4) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 118:
                if ($ChildWeight > 29.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 26.9) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 18.1) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16.5) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16.5) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 118.5:
                if ($ChildWeight > 30.3) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 27.2) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 18.3) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16.7) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16.7) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 119:
                if ($ChildWeight > 30.6) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 27.4) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 18.4) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 16.8) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 16.8) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 119.5:
                if ($ChildWeight > 30.9) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 27.7) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 18.6) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 17) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 17) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            case 120:
                if ($ChildWeight > 31.2) {
                    $result = 'Obese';
                    return $result;
                } else if ($ChildWeight > 28) {
                    $result = 'Overweight';
                    return $result;
                } else if ($ChildWeight > 18.8) {
                    $result = 'Normal';
                    return $result;
                } else if ($ChildWeight > 17.2) {
                    $result = 'Wasted';
                    return $result;
                } else if ($ChildWeight <= 17.2) {
                    $result = 'Severely Wasted';
                    return $result;
                }
                break;
            default:
                $result = "Out of Range";
                return $result;
                break;
        }
    } else {
        $result = 'Invalid Input';
        return $result;
    }
};
