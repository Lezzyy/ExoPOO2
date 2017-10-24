<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include('exoPOO.php');
    $form= new Form;
    $form->getForm();
    $form->setText('city');
    $form->setText('country');
    $form->setSubmit('submit');
    $form->closeForm();

     ?>
  </body>
</html>
