<?php

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

?>

