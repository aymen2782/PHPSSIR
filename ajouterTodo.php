<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 04/09/2018
 * Time: 15:30
 */

session_start();

/*
 * Si on a une session on ajoute le TODO
 * Sinon je créer une variable de session je la remplie de fake Todo et je l'affiche
 */

if (!isset($_SESSION['mesTodos'])) {
    $_SESSION['mesTodos']=array(
      'Dimanche'=>'Dormir',
      'Samedi' => 'Sortir'
    );
}
if(isset($_SESSION['mesTodos'][$_POST['nom']])){
    $_SESSION['error'] = "Todo existant impossible de l'ajouter";
} else {
    $_SESSION['mesTodos'][$_POST['nom']] = $_POST['todo'];
    $_SESSION['succes'] = "Todo ".$_SESSION['mesTodos'][$_POST['nom']]." ajouté avec succés";
}
header("location:listeTodo.php");
?>

