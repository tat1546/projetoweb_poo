<?php

require_once("automoveis.class.php");

class Execucao{

    private $carro1;
    private $carro2;
    
    public function __construct(){

        $carro1= new Automoveis();
        $carro1->setTipo("Porche ");
        echo $carro1-> getTipo();

        $carro1->setCor("Cinza ");
        echo $carro1-> getCor();

        $carro1->setPlaca("MHZ-4345 ");
        echo $carro1-> getPlaca();

        $carro1->setNumPortas("2 ");
        echo $carro1-> getNumPortas();

        $carro2= new Automoveis();
        $carro2->setTipo("Ferrari ");
        echo $carro2-> getTipo();

        $carro2->setCor("Vermelho ");
        echo $carro2-> getCor();

        $carro2->setPlaca("JKL-0001 ");
        echo $carro2-> getPlaca();

        $carro2->setNumPortas("4 ");
        echo $carro2-> getNumPortas();

    }

}new Execucao();

?>