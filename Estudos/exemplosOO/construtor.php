<?php 

    class Produto{
        private $descricao;
        private $estoque;
        private $preco;

        public function __construct($descricao, $estoque, $preco)
        {
            $this->descricao = $descricao;
            $this->estoque = $estoque;
            $this->preco = $preco;

            print "CONSTRUIDO: Objeto - {$this->descricao}, Estoque - {$this->estoque}, Preço - {$this->preco}<br><br>";
        }

        public function __destruct()
        {
            print "DESTRUIDO: Objeto - {$this->descricao}, Estoque - {$this->estoque}, Preço - {$this->preco}<br><br>";
        }
    }

    $p1 = new Produto('Chocolate', 10, 2);
    unset($p1);
    

?>