<?php
    class Produto{
        private $descricao;
        private $estoque;
        private $preco;

        public function setDescricao($descricao){
            if(is_string($descricao)){
                $this->descricao = $descricao;
            }
        }

        public function getDescricao(){
            return $this->descricao;
        }
        
        public function setEstoque($estoque){
            if(is_numeric($estoque) AND $estoque > 0){
                $this->estoque = $estoque;
            }
        }
        
        public function getEstoque(){
            return $this->estoque;
        }
    }   

    $p1 = new Produto;
    $p1->setDescricao('Carro');
    $p1->setEstoque(132);
    
    print 'Descrição: '.$p1->getDescricao().'<br>'.PHP_EOL;
    echo 'Estoque: '.$p1->getEstoque().'<br>'.PHP_EOL;


?>