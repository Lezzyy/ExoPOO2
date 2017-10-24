<?php

class CatManager {

  public function getBdd() {
      $bdd = new PDO('mysql:host=localhost;dbname=chats;charset=utf8', 'root', 'gj7b!17LA');
      return $bdd;
  }

public function getAllCat(){
  $response=$this->getbdd()->query('SELECT * FROM infoChat');
  $chats=$response->fetchAll(PDO::FETCH_ASSOC);
  return $chats;
}

public function addCat($nom, $age, $sexe, $couleur){
  $response=$this->getbdd()->prepare('INSERT INTO infoChat(nom, age, sexe, couleur) VALUES(:nom, :age, :sexe, :couleur)');
  $response->bindValue(':nom', $nom, PDO::PARAM_STR);
  $response->bindValue(':age', $age, PDO::PARAM_INT);
  $response->bindValue(':sexe', $sexe, PDO::PARAM_STR);
  $response->bindValue(':couleur', $couleur, PDO::PARAM_STR);
  $response->execute();
}

}

  ?>
