<?php 
class Car {
    public $doors = 4;
    public function __construct($name,$doors,$color){
        $this->doors = $doors;
        $this->name = $name;
        $this->color = $color;
    }

    public function printName(){
        echo $this->name;
    }

    public function statement(){
        echo "<h1>This car is a {$this->color} {$this->name} and has {$this->doors} doors</h1>";
    }
}

$honda = new Car("Civic",4,"red");
$GreenHonda = new Car("Civic", 2, "green");
$Bmw = new Car("M6",4 , "Space Grey");

$honda->statement();
$Bmw->statement();

echo"<pre>". var_dump($honda) . "</pre>";

// var_dump($honda);

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