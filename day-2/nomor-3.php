<?php

function showPrimeNumber($angka)
{

    for ($i = 2; $i < $angka; $i++) {


        for ($j = 2; $j <= $i-1; $j++) {

            if ($i % $j == 0) {
                break;
            } 
        }
        if ($j == $i) {
            echo $i . '<br>';
        }
    }
}

showPrimeNumber(100);
