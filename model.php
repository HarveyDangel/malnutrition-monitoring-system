<?php

echo 'Model <br>';



$ChildCurrentAgeInMonth;
$ChildCurrentWeight = 11;
$ChildCurrentHeight = 50;

$ChildrenWeightMedian = 8;
$ChildrenHeightMedian = 60;

$WFAclassification = weightForAge($ChildCurrentWeight, $ChildrenWeightMedian);

echo "$WFAclassification% <br>";


$HFAclassification = heightForAge($ChildCurrentHeight, $ChildrenHeightMedian);

echo "$HFAclassification% <br>";

$WFHclassification = weightForHeight($ChildCurrentHeight, $ChildrenHeightMedian);

echo "$WFHclassification";


function GetChildrenWeightMedian(){

};

function GetChildrenHeightMedian(){

};


function weightForAge($ChildCurrentWeight, $ChildrenWeightMedian){
    $result = ($ChildrenWeightMedian / $ChildCurrentWeight) * 100;
    return $result;
};

function heightForAge($ChildCurrentHeight, $ChildrenHeightMedian){
    $result = ($ChildrenHeightMedian / $ChildCurrentHeight) * 100;
    return $result;

};

function weightForHeight($ChildCurrentHeight, $ChildCurrentWeight){
    $result = ($ChildCurrentWeight*$ChildCurrentHeight)/100;
    return $result;

};
?>