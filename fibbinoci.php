<?php
function fibonacci($n){
    $a = 0;
    $b = 1;
    $c = 0;
    echo $a."<br>".$b."<br>";
    for($i=2;$i<$n;++$i){
        $c=$a+$b;
        echo $c."<br>";
        $a=$b;  
        $b=$c;
    }
}
fibonacci(20);
?>
