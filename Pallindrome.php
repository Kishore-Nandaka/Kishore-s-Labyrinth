<?php

function isPalindrome($string) {
    $string = strtolower($string); // Convert to lowercase
    $string = preg_replace('/[^a-z0-9]/', '', $string); // Remove non-alphanumeric characters
    $reverseString = strrev($string); // Reverse the string
    
    if ($string == $reverseString) {
        // return true;
        echo "$string is a palindrome.";

    } else {
        echo "$string is not a palindrome.";
        // return false;
    }
}

$inputString = "1232561";
isPalindrome($inputString);
//     echo "$inputString is a palindrome.";
// } else {
// }

?>