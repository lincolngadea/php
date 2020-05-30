<?php

/**
 * PARA MANIPULAR UM ATRIBUTO ESTÁTICO É PRECISO UM MÉTODO ESTÁTICO.
 */

class Software{

    private $id;
    private $nome;
    private static $contador;

    function __construct($nome){

        self::$contador ++;

        $this->id = self::$contador;
        $this->nome = $nome;

        echo "Software {$this->id} - {$this->nome}<br>";
    }

    public static function getContador(){
        return self::$contador;
    }
   
}

//INSTANCIANDO O OBJETO

new Software('Dia');
new Software('Gimp');
new Software('Gnumeric');

echo 'Quantidade Criada = '.Software::getContador(); //método estático de fora da classe