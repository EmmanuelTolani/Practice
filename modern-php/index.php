<?php 
require("classes/Car.php");
require("classes/Honda.php");
require("classes/Bmw.php");
$car1 = new Honda("Civic", 2, "Green" , "25,000");
// var_dump($honda);
$car1->price();
$car1->statement();
$car2 = new Bmw("M3", 4, "Space Grey", "80,000");
$car2->price();
$car2->statement();
$car2->sportsPackage(false)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>