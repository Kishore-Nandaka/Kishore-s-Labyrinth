<?php
$str = "Hello World!";
$length = strlen($str);
$newStr = str_replace("World", "PHP", $str);
$pos = strpos($str, "!");
$substring = substr($str, 0, $pos+1);
$uppercase = strtoupper($str);
$lowercase = strtolower($str);
$chars = str_split($str);
echo "Original String: " . $str . "<br>";
echo "Length of String: " . $length . "<br>";
echo "New String: " . $newStr . "<br>";
echo "Position of !: " . $pos . "<br>";
echo "Substring: " . $substring . "<br>";
echo "Uppercase String: " . $uppercase . "<br>";
echo "Lowercase String: " . $lowercase . "<br>";
echo "Array of Characters: ";
print_r($chars);
?>