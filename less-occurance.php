<?php 
// Write a code to find a number in less occurance in an array
$numArray = [1, 1, 2, 3, 3, 1, 2, 5, 6, 5, 7, 7];
$itemAssociativeArray = [];

var_dump($numArray);

foreach ($numArray as $value) {
    $returnKey = checkItemExists($itemAssociativeArray, $value);
    if ($returnKey != 'not found') {
        $itemAssociativeArray[$returnKey] = [
            'item' => $value,
            'count' => $itemAssociativeArray[$returnKey]['count'] + 1
        ];
    }
    else {
        $itemAssociativeArray[] = [
            'item' => $value,
            'count' => 1
        ];
    }
}

function checkItemExists($assocArray, $seekItem)
{
    foreach ($assocArray as $key => $value) {
        if ($value['item'] == (string) $seekItem) {
            return $key;
        }
    }
    return 'not found';
}

var_dump($itemAssociativeArray);

$numbers = array_column($itemAssociativeArray, 'count');
$lessOccurrance = min($numbers);

// Now find the less occurance item
$lessOccurranceNumner = 0;
foreach ($itemAssociativeArray as $value) {
    if ($value['count'] == $lessOccurrance) {
        $lessOccurranceNumner = $value['item'];
        break;
    }
}

var_dump($lessOccurranceNumner);