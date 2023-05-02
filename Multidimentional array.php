<?php
$c = array(array("name" => "Bob" , "occupation" => "Superhero", "age" => 30 , "superpower" => "x-rayvission"),
array("name" => "Sally" , "occupation" => "Superhero", "age" => 24 , "superpower" => "Super human strength"),
array("name" => "Jane" , "occupation" => "arch Villaian", "age" => 45 , "superpower" => "Nano-Technology"));
print_r($c[0]);
echo "<br>";
print_r($c[1]);
echo "<br>";
print_r($c[2]);
echo "<br>",$c[2]["occupation"];

