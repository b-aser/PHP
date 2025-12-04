<?php

// $count = 100;

// do{
//     var_dump($count);
//     $count++;
// } while ($count < 5);

#foreach, while, do while, and for


$numbers = [1, 2, 3, 4, 5];
$double = [];

foreach ($numbers as $number) {
    $double[] = $number * 2;
}

var_dump($double);