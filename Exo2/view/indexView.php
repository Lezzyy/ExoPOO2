<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Chats</title>
  </head>
  <body>

    <?php
//we show all cats register in db
      foreach ($cats as $cat) {
        echo "<p>".$cat->getNom()."</p><br>";
      }
     ?>
     <form class="" action="" method="post">
       <input type="text" name="nom" value="" placeholder="nom">
       <input type="text" name="age" value="" placeholder="age">
       <input type="text" name="sexe" value="" placeholder="sexe">
       <input type="text" name="couleur" value="" placeholder="couleur">
       <input type="submit" name="" value="enregistrer">
     </form>
  </body>
</html>
