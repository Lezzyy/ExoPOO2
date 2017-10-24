<?php

abstract class Person{
  protected $name;
  protected $firstname;

  public function __construct($name, $firstname){
    $this->setName($name);
    $this->setFirstname($firstname);
  }

// setters
public function setName($name){
  $this->name=$name;
}

public function setFirstname($firstname){
  $this->firstname=$firstname;
}

// getters

public function getName(){
  return $this->name;
}

public function getFirstname(){
  return $this->firstname;
}
}

class Client extends Person{
  protected $address;

  // getter
public function getAddress(){
  return $this->address;
}

// setter
public function setAddress($address){
  $this->address=$address;
}
}

 ?>
