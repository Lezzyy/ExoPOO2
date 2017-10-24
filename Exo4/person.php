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
  echo $this->name=$name;
}

public function setFirstname($firstname){
  echo $this->firstname=$firstname;
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
  echo $this->address=$address;
}
}

$client= new Client('Mclane ', 'John ');
$client->setAddress('New-York ');


class Elector extends Person{
  protected $vote_place;
  protected $vote;

  public function voted(){
    echo $this->vote = 'voted';
  }
}

$elector= new Elector('Lili ', 'Lulu ');
$elector->voted();

 ?>
