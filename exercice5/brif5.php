<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 5 compteur du vue</title>
</head>
<body>
    <h1>bonjour a tous</h1>
    <?php
 require_once dirname(__DIR__).DIRECTORY_SEPARATOR.'exercice5'.DIRECTORY_SEPARATOR.'compteur.php';
 ajoute_vues() ;
 $vues=nombre_vues();
 ?>
   il ya <?= $vues ?> visite<?php if($vues > 1): ?>s<?php endif; ?> sur le site
</body>
</html>