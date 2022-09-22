<?php 
class Car {
    public $doors = 4;
    public $color ="Black";

    public function __construct($name,$doors,$color,$price){
        $this->name = $name;
        $this->doors = $doors;
        $this->color = $color;
        $this->price = $price;
    }
    public function statement(){
        echo "<h1>{$this->company} {$this->name} has {$this->doors} doors and the color is {$this->color}</h1>";
    }
}
?>