<?php 

/**
* Operator Assignment (Penugasan)
*/

$x = 10;
$y = 50;

var_dump($x == $y); // false
var_dump($x === $y); // false
var_dump($x != $y); // true
var_dump($x <> $y); // true
var_dump($x !== $y); // true
var_dump($x > $y); // false
var_dump($x < $y); // true
var_dump($x >= $y); // false
var_dump($x <= $y); // true


// spaceship
$a1 = 10;
$a2 = 20;
var_dump($a1 <=> $a2); // -1

$a1 = 10;
$a2 = 10;
var_dump($a1 <=> $a2); // 0

$a1 = 10;
$a2 = 5;
var_dump($a1 <=> $a2); // 1
