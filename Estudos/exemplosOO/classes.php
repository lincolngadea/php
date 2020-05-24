<?php 

    class fabricante{

        private $nome;
        private $endereco;
        private $documento;

        public function __construct($nome, $endereco, $documento)
        {
            $this->nome = $nome;
            $this->endereco = $endereco;
            $this->documento = $documento;
        }
        public function getNome(){
            return $this->nome;
        }
    }

    class Produto{
        private $descricao;
        private $estoque;
        private $preco;
        private $fabricante;
        private $caracteristica;

        public function __construct($descricao, $estoque, $preco)
        {
            $this->descricao = $descricao;
            $this->estoque = $estoque;
            $this->preco = $preco;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setFabricante(Fabricante $f){
            $this->fabricante = $f;
        }

        public function getFabricante(){
            return $this->fabricante;
        }

        public function addCaracteristica($nome, $valor){
            $this->caracteristica[] = new Caracteristica($nome, $valor);
        }

        public function getCaracteristica(){
            return $this->caracteristica;
        }
    }

    class caracteristica{
        private $nome;
        private $valor;

        public function __construct($nome, $valor)
        {
            $this->nome = $nome;
            $this->valor = $valor;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getValor(){
            return $this->valor;
        }
    }

    class Cesta{
        private $time;
        private $itens;

        public function __construct()
        {
            $this->time = date('d-m-Y H:i:s');
            $this->itens = array();
        }

        public function addItens( Produto $p){
            $this->itens[] = $p;
        }

        public function getTime(){
            return $this->time;
        }

        public function getItens(){
            return $this->itens;
        }
    }