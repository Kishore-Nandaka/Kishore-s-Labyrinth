<?php
function seperatenumbers($numbers){
    $evenNumbers = [];
    $oddNumbers = [];

    foreach ($numbers as $number){
        if($number % 2 == 0){
            $evenNumbers[] = $number;
        }else{
            $oddNumbers[] = $number;
        }
    }
    echo "Even Numbers: ".implode(",",$evenNumbers)."<br>";
    echo "Odd Numbers: ".implode(",",$oddNumbers)."<br>";
}
$numbers = [1,2,3,4,5,6,7,8,9,10];
seperatenumbers($numbers);
// $a = 0;
// while($a <= 10);
// echo "$a <br>";
// $a++
?>