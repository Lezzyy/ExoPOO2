<?php
// exercice 1

// class City {
//   private $_name;
//   private $_state;
// public function getInfoCity($CityName,$CityState){
//   echo 'The city of '.$this->_name=$CityName.' is in '.$this->_state=$CityState;
//   }
// }
//
// $TheCity = new City;
// $TheCity->getInfoCity('Los Angeles', 'California');

//exercice 2

// class City
// {
//     private $_name;
//     private $_state;
//
//     public function __construct($name, $state)
//     {
//         $this->set_Name($name);
//         $this->set_State($state);
//     }
//
//     public function name()
//     {
//         return $this->_name;
//     }
//
//     public function state(){
//       return $this->_state;
//     }
//
//     public function set_Name($name)
//     {
//         $this->_name=$name;
//     }
//
//     public function set_State($state)
//     {
//         $this->_state=$state;
//     }
//
//     public function getInfoCity()
//     {
//         echo $this->name().' '.$this->state();
//     }
// }
//
// $TheNewCity = new City('Los Angeles', 'California');
// $TheNewCity -> getInfoCity();

//Exercice 3

// class Person{
//   private $_name;
//   private $_firstName;
//   private $_address;
// public function __construct($name, $firstName, $address){
//   $this->setName($name);
//   $this->setFirstName($firstName);
//   $this->setAdress($address);
// }
//
// public function setName($name){
//   echo $this->_name=$name;
// }
//
// public function setFirstName($firstName){
//   echo $this->_name=$firstName;
// }
// public function setAdress($address){
//   echo $this->_address=$address;
// }

// public function __destruct(){
//   return
// }
// }


// $newPerson= new Person('Bing ', 'Chandler ', '1 rue du Yemen, Yemen');
// $newPerson->setAdress(' 12 rue central perk, New York');


// test methode et attribut statiques

// class Compteur
// {
//   private static $_compteur=0;
//
//   function __construct()
//   {
//     self::$_compteur++;
//   }
//   public static function getCompteur(){
//     echo self::$_compteur;
//   }
// }
//
// $tets1= new Compteur;
// $test2= new Compteur;
//
// echo Compteur::getCompteur();


// exercice 4

class Form
{
    private $_form;
    private $_closeForm;
    public function __construct()
    {
        $this->_form = '<form><fieldset>';
        $this ->_closeForm = '</fieldset> </form>';
    }
    // public function form()
    //     {
    //         return $this->_form;
    //     }
    public function setText($text){
      echo '<input type="text" placeholder="'.$text.'">';
    }
    public function setSubmit($submit){
      echo '<input type="submit" value="'.$submit.'">';
    }
    public function getForm(){
      echo $this->_form;
    }
    public function closeForm(){
      echo $this->_closeForm;
    }
}

class form2 extends form {

}


?>
