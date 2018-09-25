<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 18/09/2018
 * Time: 16:16
 */

require '../autoload.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $personne = new Personne();
    $personne->deletePersonne($id);
}
header("location:../main.php");

