<?php
$membership = "pAB756";
$a = strlen($membership); 
if($a == 4){
    echo "Thank you.";
} else {
    echo "Your membership number must have 4 charecters but it has ",$a," charecters";
}