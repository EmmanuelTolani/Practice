<?php 
    class Bmw extends Car{
        public $company = "Bmw"; 
         public function __construct($name,$doors,$color,$price){
        $this->name = $name;
        $this->doors = $doors;
        $this->color = $color;
        $this->price = $price;
    }
        public function price(){
            echo "<h1>The price of this {$this->company} {$this->name} is {$this->price} Euro</h1>";
        }
        public function sportsPackage($bool){
            if($bool){
                echo "<h3>You have the sports package</h3>";
            }
            else{
                echo "<h3>You don't have the sports package</h3>";
            }
        }
    }