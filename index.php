<?php

// Premiere ligne

$n1 = 10;
$n2 = 5;
$total = $n1 * $n2;
echo $total . "<br>";

//Deuxieme ligne
$n3 = 10;
$n4 = 2;
$tital = $n3 / $n4;
echo $tital;

//Troisieme ligne
$a = 5;
$b = 5;
if ($a === $b) {
    echo "<br><br>a est identique à b";
}

//Quatrieme ligne
$a = 2;
$b = 1;

if ($a > $b) {
    echo "<br><br>a n'est pas identique à b";
}


//Cinquieme ligne

$arr1 = ["machin", "truc"];
$arr2 = ["truc", "machin"];
if ($arr1 !== $arr2) {
    echo "<br><br>les tableaux ont le même contenu";
}

