<?php
$i = 0;
$j = 0;
for ($i = 0; $i < 5; $i++) {
    for ($j = 1; $j <= $i + 1 ; $j++) {
        echo " " . ($i + $j);
    }
    echo "" . '<br>';
}
