<?php

abstract class Vehicule{
  protected $registration;
  protected $color;

  public function __construct($registration, $color){
    $this->setRegistration($registration);
    $this->setColor($color);
  }

  // getters
  public function getRegistration(){
    return $this->registration;
  }

  public function getColor(){
    return $this->color;
  }

  // setters
  public function setRegistration($registration){
    echo $this->registration=$registration;
  }

  public function setColor($color){
    echo $this->color=$color;
  }
}

class Car extends Vehicule{
  protected $nbr_doors;

// getter
  public function getNbr_doors(){
    return $this->nbr_doors;
  }

  // setter
  public function setNbr_doors($nbr_doors){
    echo $this->nbr_doors=$nbr_doors;
  }
}

class Bus extends Vehicule{
  protected $nbr_floors;

  // getter
  public function getNbr_floors(){
    return $this->nbr_floors;
  }

  // setter
  public function setNbr_floors($nbr_floors){
    echo $this->nbr_floors=$nbr_floors;
  }
}

$car= new Car('124343 ', 'blue ');
$car->setNbr_doors(3);

$bus= new Bus(' 6589', ' red ');
$bus->setNbr_floors(2);
 ?>
