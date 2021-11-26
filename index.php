<?php

$twoPairValues = [
    [1, 5],
    [9, -7],
    [0, 8],
    [6, 3],
    [4, 11],
    [14, 0],
    [8, 1],
    [4, 9],
];

$targetValue = 9;

function findTheIndex(array $twoPairValues, int $targetValue){
    
    foreach($twoPairValues as $key => $twoPairValue){
        
        if(array_sum($twoPairValue) == $targetValue ){
            $matchIndex[] = $key;
        }
    }
    return  $matchIndex;
}

$matchIndes = findTheIndex($twoPairValues, $targetValue);
echo "<script>console.log('Match Indexes: " . implode(', ', $matchIndes) . "' );</script>";




?>