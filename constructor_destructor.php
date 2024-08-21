<?php


class Correr{

 public $corrida = null;

 function __construct($corrida){
    echo 'beker';
    $this->corrida = $corrida;

 }

 function __get($atributo) {
    return $this->$atributo;
}

}

$correr = new Correr(' está correndo');
echo $correr->__get('corrida')



?> 