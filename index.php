<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
<?php
require_once 'animal.php';
require_once 'Ape.php';
require_once 'Frog.php';

$sheep = new Animal("shaun");
echo "Name: " . $sheep->name . "<br>"; // Output: "shaun"
echo "Legs: " . $sheep->legs . "<br>"; // Output: 4
echo "Cold Blooded: " . $sheep->cold_blooded . "<br>"; // Output: "no"

echo "<br>"; // Baris kosong

$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->name . "<br>"; // Output: "kera sakti"
echo "Legs: " . $sungokong->legs . "<br>"; // Output: 2
echo "Cold Blooded: " . $sungokong->cold_blooded . "<br>"; // Output: "no"
echo "Ape Yell: " . $sungokong->yell() . "<br>"; // Output: "Auooo"

echo "<br>"; // Baris kosong

$kodok = new Frog("buduk");
echo "Name: " . $kodok->name . "<br>"; // Output: "buduk"
echo "Legs: " . $kodok->legs . "<br>"; // Output: 4
echo "Cold Blooded: " . $kodok->cold_blooded . "<br>"; // Output: "no"
echo "Frog Jump: " . $kodok->jump() . "<br>"; // Output: "hop hop"
?>
</body>
</html>
