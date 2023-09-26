<?php

$studentGrades = [

    "student1" => ["Math"=>80, "English" => 90, "Science" => 100],
    "student2" => ["Math"=>70, "English" => 80, "Science" => 90],
    "student3" => ["Math"=>60, "English" => 70, "Science" => 80]
];

function averageGrade($grades){

    foreach($grades as $student => $subjct){
        
        $total = array_sum($subjct);
        $count = count($subjct);
        $average = $total / $count;

        echo "The average score is: $average\n"; 
    }

}

averageGrade($studentGrades);

    
    