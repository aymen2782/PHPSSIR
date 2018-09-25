<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 18/09/2018
 * Time: 13:45
 */
include 'autoload.php';

include 'Controller/listPersonnes.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des utilisateurs</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <?php foreach ($personnes as $personne)  {
     if  ($personne->id % 2) {
        $classCss = "alert alert-danger";
        } else {
         $classCss = "alert alert-success";
        }
    ?>
        <div class="<?= $classCss ?>">
            <a href="Controller/deletePersonne.php?id=<?= $personne->id ?>">
               <?= $personne->id ?>
            </a>
            <?=
        " <br> " .
        $personne->cin .
        " <br> " .
        $personne->nom .
        " <br> " .
        $personne->prenom .
        " <br> " . $personne->age .
        " <br> " ?>
        </div>
    <?php } ?>


</body>
</html>
