<?php 
/*Pertemuan 10 Dasar PHP
Operator Array */

$first = [
"nama_depan" => "Mardi",
"nama_belakang" => "Yansa"
];

$last = [
"nama_belakang" => "Yansa",
 "nama_depan" => "Mardi"
];

$full = $first + $last;
var_dump($full);
var_dump($first == $last);
var_dump($first === $last);


?>