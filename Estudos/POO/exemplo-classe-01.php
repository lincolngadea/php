<?php

    class Pessoa {

        public $nome;
        public function falar(){

            return "O meu nome é ".$this->nome;
        }
    }

    $lincoln = new Pessoa();
    $lincoln->nome = "Lincoln Gadéa";        
    echo $lincoln->falar();
