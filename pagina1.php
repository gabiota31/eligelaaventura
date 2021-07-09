<?php
/*
include 'centro.php';
include 'prueba.php'
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    
</head>
<body>

    <div class="pagina" id="pagina1">
        En una tierra muy muy lejana estaba <span class="objeto"> <?php $historia1-> mostrarAtributo("prota"); ?> </span>, habil con <span class="objeto"> <?php $historia1-> mostrarAtributo("arma"); ?></span>, no había quien pudiera meterse en su  camino. Junto con su fiel compa <span class="objeto"> <?php $historia1-> mostrarAtributo("compa"); ?></span> se aventuró un dia en <span class="objeto"><?php $historia1-> mostrarAtributo("esc"); ?> </span> en busca del más preciado tesoro: <span class="objeto"><?php $historia1-> mostrarAtributo("meta");?></span>. Pero no sería una tarea fácil, pues en <span class="objeto"><?php $historia1-> mostrarAtributo("esc");?></span> les esperaba criaturas terribles, dirigidas unicamente por la temible influencia de <span class="objeto"><?php $historia1-> mostrarAtributo("enem");?></span>
    </div>

</body>
</html>