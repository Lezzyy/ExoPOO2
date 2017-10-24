<?php
class Chat{
  protected $id;
  protected $nom;
  protected $age;
  protected $sexe;
  protected $couleur;

  // const SEXE_FEMELLE = 'Femelle';
  // const SEXE_MALE = 'Male';
  //
  // const COULEUR_BRUN = 'Brun';
  // const COULEUR_MARRON = 'Marron';
  // const COULEUR_BLANCHE = 'Blanc';
  // const COULEUR_NOIRE = 'Noir';

// getters
public function getId(){
  return $this->id;
}

public function getNom(){
  return $this->nom;
}

public function getAge(){
  return $this->age;
}

public function getSexe(){
  return $this->sexe;
}

public function getCouleur(){
  return $this->couleur;
}

// setters

public function setId($id){
$this->id=$id;
}


public function setNom($nom){
  if(strlen($nom)<=15){
  $this->nom=$nom;
  }
  else{
    echo "Veuillez entrer un nom plus court";
  }
}

public function setAge(int $age){
  if ($age>0 && $age<30){
  $this->age=$age;
  }
  else {
  "Veuillez entrer un âge correct";
  }
}

public function setSexe($sexe){
  // if(in_array($sexe, [self::SEXE_FEMELLE, self::SEXE_MALE])){
$this->sexe=$sexe;
  }
// else {
//   echo "veuillez entrer une donnée correcte";
// }
// }

public function setCouleur($couleur){
// if(in_array($couleur, [self::COULEUR_BRUN, self::COULEUR_MARRON, self::COULEUR_BLANCHE,self::COULEUR_NOIRE])){
 $this->couleur=$couleur;
// }
}

// methods
//we get the info enter in bdd
public function hydrate($data){
  foreach ($data as $key => $value) {
$method="set".ucfirst($key);
if (method_exists($this, $method)) {
 $this->$method($value);
    }
  }
}


public function __construct($data)
{
  $this->hydrate($data);
}



// public function __construct($nom, $age, $sexe, $couleur){
//   $this->setNom($nom);
//   $this->setAge($age);
//   $this->setSexe($sexe);
//   $this->setCouleur($couleur);
// }
}

// $chaton=new Chat("Kiwi ", 29, Chat::SEXE_FEMELLE, Chat::COULEUR_BRUN);

 ?>
