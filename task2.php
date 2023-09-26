<?php

function removeEven($numbers){

    $filteredArray = array_filter($numbers, function($new){

        return $new % 2 != 0;

    });

    return $filteredArray;

}

$numbers = [1,2,3,4,5,6,7,8,9,10];

$filteredArray = removeEven($numbers);

print_r($filteredArray);



