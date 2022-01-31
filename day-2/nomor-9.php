<?php
$fruitNamesA = ['rambutan', 'durian', 'jeruk', 'nangka'];
$fruitNamesB = ['nangka', 'durian', 'jeruk', 'rambutan'];
$fruitNamesC = ['anggur', 'apel', 'mangga', 'alpukat'];

$length = count($fruitNamesA);

function isArrayEqual($arrayA, $arrayB){
    $hitung = 0;
    for($i = 0; $i < count($arrayA); $i++){
        if($arrayA[$i] === $arrayB[$i]){
            $hitung++;
        }
        else{
            break;
        }
    }

    if($hitung == count($arrayA)){
        echo "Equal";
    }
    else{
        echo "Tidak Equal";
    }
}

isArrayEqual($fruitNamesA, $fruitNamesB);

