<?php
$x = 30;
$y = 5;

do {
    $y = $y * 2;
    $x++;
    echo $y . " < " . $x . " => x : " . $x . " y :" . $y . '<br>';
    // System . out . println();
} while ($y < $x);

// output 
// 10 < 31 => x : 31 y :10
// 20 < 32 => x : 32 y :20
// 40 < 33 => x : 33 y :40