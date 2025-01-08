<?php
require_once "animal.php";
require_once "Frog.php";
require_once "Ape.php";

// Hewan dasar
$sheep = new Animal("shaun");
echo "Name : {$sheep->name}<br>";
echo "Legs : {$sheep->legs}<br>";
echo "Cold blooded : {$sheep->cold_blooded}<br><br>";

// Kodok
$kodok = new Frog("buduk");
echo "Name : {$kodok->name}<br>";
echo "Legs : {$kodok->legs}<br>";
echo "Cold blooded : {$kodok->cold_blooded}<br>";
echo "Jump : {$kodok->jump()}<br><br>";

// Kera
$sungokong = new Ape("Kera sakti");
echo "Name : {$sungokong->name}<br>";
echo "Legs : {$sungokong->legs}<br>";
echo "Cold blooded : {$sungokong->cold_blooded}<br>";
echo "Yell : {$sungokong->yell()}<br>";
?>
