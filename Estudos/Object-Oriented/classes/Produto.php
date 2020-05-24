<?php

    class Produto{
        
        private $descricao;
        private $estoque;
        private $preco;
        private $fabricante;
        private $caracteristicas;

        public function __construct($descricao, $estoque,$preco){
            if(is_string($descricao)){
                $this->descricao = $descricao;
            }
            if(is_numeric($estoque)){
                $this->estoque = $estoque;
            }
            if(is_numeric($preco)){
                $this->preco = $preco;
            }
        }

        public function setCaracteristicas($nome,$valor){
            $this->caracteristicas[] = new Caracteristica($nome, $valor);
        }

        public function getCaracteristicas(){
            return $this->caracteristicas;
        }

        public function setFabricante( Fabricante $f){

            $this->fabricante = $f;
        }

        public function getFabricante(){
            return $this->fabricante;
        }

        public function getDescricao(){
            return $this->descricao;
        }
        public function getEstoque(){
            return $this->estoque;
        }
        public function getPreco(){
            return $this->preco;
        }
    }

   