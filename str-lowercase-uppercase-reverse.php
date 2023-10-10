<?php
$given_string = 'World IS A great plaCe';

$output_string = '';

for ($index = 0; $index < strlen($given_string); $index++) {
    if (check_char_in_uppercase_or_lowercase($given_string[$index]) == 'U') {
        $output_string .= strtolower($given_string[$index]);
    }
    elseif (check_char_in_uppercase_or_lowercase($given_string[$index]) == 'L') {
        $output_string .= strtoupper($given_string[$index]);
    }
    else {
        $output_string .= ' ';
    }
}

echo $output_string;

/**
 * Check incoming input character is in uppercase or lowercase
 *
 * @param string $character
 * @return string
 */
function check_char_in_uppercase_or_lowercase($character)
{
    $upperCaseArray = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $upperCharsArray = str_split($upperCaseArray);

    $lowerCaseArray = 'abcdefghijklmnopqrstuvwxyz';

    $lowerCharsArray = str_split($lowerCaseArray);

    $caseFlag = '';

    for ($i = 0; $i < count($upperCharsArray); $i++) {
        if ($upperCharsArray[$i] == $character) {
            $caseFlag = 'U';
            break;
        }
    }

    for ($i = 0; $i < count($lowerCharsArray); $i++) {
        if ($lowerCharsArray[$i] == $character) {
            $caseFlag = 'L';
            break;
        }
    }

    return $caseFlag;
}