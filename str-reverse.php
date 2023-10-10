<?php 
$inputString = 'ashique is in wisenetwork';

$reverseString = stringReverse($inputString);

var_dump($reverseString);

/**
 * Reverse input string
 *
 * @param string $string
 * @return string
 */
function stringReverse($inputString)
{
    $storeString = '';
    $stringLength = strlen($inputString);
    for ($i = $stringLength; $i >= 0; $i--) {
        $storeString = $storeString . '' . $inputString[$i - 1];
    }

    return $storeString;
}