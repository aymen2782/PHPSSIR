
<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 04/09/2018
 * Time: 15:47
 */
session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Liste de Todos</title>
</head>
<body>

<?php
if (!isset($_SESSION['mesTodos'])){
?>
<div class="alert alert-danger">Liste Vide</div>
<?php
} else {
?>
    <?php if (isset($_SESSION['error'])){
        ?>
        <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
    <?php
    unset($_SESSION['error']);
    }
    ?>

    <?php if (isset($_SESSION['succes'])){
        ?>
        <div class="alert alert-success"><?= $_SESSION['succes'] ?></div>
        <?php
        unset($_SESSION['succes']);
    }
    ?>
    <h1>Liste de Todo</h1>
<ol class="list-group">
    <?php foreach ($_SESSION['mesTodos'] as $titre=>$contenu)  { ?>
       <li class="list-group-item">
           <?php echo $titre. ' : '. $contenu ; ?>
       </li>
    <?php } ?>
        </ol>
<?php } ?>

</body>
</html>
