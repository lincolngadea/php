<?php

    class Servico implements OrcavelInterface{
        private $descricao;
        private $preco;

        public function __construct($descricao,$preco){
            $this->descricao = $descricao;
            $this->preco = $preco;
        }
        //A classe getPreco deve estar presente em todas as classes que usam a interface OrcavelInterface     
        public function getPreco(){
            return $this->preco;
        }
    }