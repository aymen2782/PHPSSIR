<?php

include 'externe.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document <?php echo $x; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

 Bonjour

<?php

$x=5;
echo $x . '<br>' ;
$x="test";
echo $x . '<br>';
$x= array(1,2,7);
print_r($x) ;
echo '<br>';

$cartes  =  array(
        'as'=>1,
        'Dous'=>2,
        'Trois'=>3,
        'Roi'=>12
);

foreach ($cartes as $cle=>$valeur) {
     echo "$cle => $valeur <br>";
}


?>

</body>
</html>
