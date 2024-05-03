<?php

class Car{
  // Properties / Fields
  private $brand;
  private $color;
  private $vehicletype = "car";
  public $nrofwheels;

  // Constructor
  public function __construct($brand, $color = "black"){
    $this->brand = $brand;
    $this->color = $color;
    $this->nrofwheels = 4;
  }

  // Method
  public function getBrand(){
    return $this->brand;
  }

  public function setColor($color){
    $this->color = $color;
  }

  public function getCarInfo(){
    return "Brand = ".$this->brand." with color ".$this->color.".";
  }
}

// // Instantiate object
// $car01 = new Car("Mercedes","red");
// $car02 = new Car("Audi");

// echo $car01->getBrand();
// echo "<br/>";
// echo $car01->nrofwheels;
// echo "<br/>";
// echo $car01->getCarInfo();
// echo "<br/>";
// $car01->setColor("Green");
// echo $car01->getCarInfo();

