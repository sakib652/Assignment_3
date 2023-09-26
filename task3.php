<?php

function sorting($grades){

    $descending = arsort($grades);

    foreach($grades as $mark){

    echo $mark . "\n";

    }

}

$grades = [85, 92, 78, 88, 95];

sorting($grades);


