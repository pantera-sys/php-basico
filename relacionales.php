<?php

// == Igual
$a = 5;
$b = 5;
$b2 = "5";
$c = 9;
$d = 2;

var_dump($a == $b);
var_dump($a == $b2);

// === Identico

var_dump($a === $b);
var_dump($a === $b2);

// != diferente

var_dump($a != $b2);
var_dump($a != $b);

// !== 

var_dump($a !== $b2);
var_dump($a !== $b);

// < menor que

var_dump($a < $b);
var_dump($c < $b);
var_dump($d < $b);

// > mayor que

var_dump($a > $b);
var_dump($c > $b);
var_dump($d > $b);

// mayor igual que

var_dump($a >= $b);
var_dump($c >= $b);
var_dump($d >= $b);