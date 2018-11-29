<?php
session_start();
$_SESSION['lastname'] = 'Neveu';
$_SESSION['name'] = 'Aymeric';
$_SESSION['age'] = 18;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
  </head>
  <body>
    <p>Tu récuperas tes informations sur cette page</p>
    <a href="user.php">info</a>
  </body>
</html>
