<?php

require 'clase.php';

//trae los atributos que elije le usuarie para el cuento
/*
$prota = $_POST['protagonista'];
$esc = $_POST['escenario'];
$enem = $_POST['enemigo'];
$arma = $_POST['arma'];
$compa = $_POST['compa_prota'];
*/
//para cuando se usa el index
//$historia1 = new Cuento($prota, $esc, $enem, $arma, $compa,"El Grial Mágico");

//para cuando se prueba sin el index
$historia1 = new Cuento("Galina", "El Bosque Encantado", "Tyranus Malus", "la espada", "El Gato Nato","El Grial Mágico");


//codigo de control
/* 
echo "<pre>";
$historia1-> mostrarAtributo("prota");
echo "</pre>";
echo "<pre>";
$historia1-> mostrarAtributo("esc");
echo "</pre>";
echo "<pre>";
$historia1-> mostrarAtributo("enem");
echo "</pre>";
echo "<pre>";
$historia1-> mostrarAtributo("arma");
echo "</pre>";
echo "<pre>";
$historia1-> mostrarAtributo("compa");
echo "</pre>";
echo "<pre>";
$historia1-> mostrarAtributo("premio");
echo "</pre>";
*/


include 'pagina1.php';
include 'pagina2.php';
//include 'botones.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'botones.php'; ?>
</body>
</html>








