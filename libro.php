<?php

require 'centro.php';
/*
class Cuento {
    public $protagonista;
    public $escenario;
    public $enemigo;
    public $arma;
    public $compa_prota;
    public $meta;

    public function __construct($prota,$esc,$enem,$arma,$compa,$meta) {
        $this->protagonista = $prota;
        $this->escenario = $esc;
        $this->enemigo = $enem;
        $this->arma = $arma;
        $this->compa_prota = $compa;
        $this->meta = $meta;
    }

    public function mostrarAtributo($selector){
        if($selector == "prota"){
            echo $this->protagonista;
        }elseif($selector == "esc"){
            echo $this->escenario;
        }elseif($selector == "enem"){
            echo $this->enemigo;
        }elseif($selector == "arma"){
            echo $this->arma;
        }elseif($selector == "compa"){
            echo $this->compa_prota;
        }elseif($selector == "meta"){
            echo $this->meta;
        }else{
            echo "error";
        }
    }
};
*/
/*
$prota = $_POST['protagonista'];
$esc = $_POST['escenario'];
$enem = $_POST['enemigo'];
$arma = $_POST['arma'];
$compa = $_POST['compa_prota'];

$historia1 = new Cuento($prota, $esc, $enem, $arma, $compa,"El Grial Mágico");
*/
$historia1 = new Cuento("Galina", "El Bosque Encantado", "Tyranus Malus", "la espada", "El Gato Nato","El Grial Mágico");

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


    <div class="pagina" id="pagina2">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus fugiat maiores iste, quae perspiciatis illo in aut a. Iure soluta enim repellendus beatae earum. Rerum aliquam aliquid dolorum doloremque sequi!
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Pariatur quam perferendis temporibus omnis, libero nulla earum dolore. Quisquam laborum perspiciatis, iste neque impedit qui maxime corrupti perferendis voluptate sit illo?
    </div>

    <div class="boton" id="b-atras"> <- </div>
    <div class="boton" id="b-adelante">-></div>



    <script src='dinamica.js'></script>



</body>
</html>





