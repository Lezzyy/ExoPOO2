<?php
require('../entities/cat.php');
require('../model/CatManager.php');

$CatManager = new CatManager();

$cats=$CatManager->getAllCat();
foreach ($cats as $key => $value) {
  $cats[$key]= new Chat($value);
}

// we register in db all infos enter in the form

if(isset($_POST['nom']) && isset($_POST['age']) && isset ($_POST['sexe']) && isset($_POST['couleur'])){
$newChat=new CatManager();
$newChat->addCat($_POST['nom'], $_POST['age'], $_POST['sexe'], $_POST['couleur']);
}


// test to add cat with object
// $newChat= new CatManager();
// $newChat->addCat('Milou', 21, 'Femelle', 'Brun');

include '../view/indexView.php';
 ?>
