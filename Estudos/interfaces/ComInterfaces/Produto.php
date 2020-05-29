<?php

/**
 * Para fazer com que a class Produto usará uma determinada interface, 
 * usamos a palavra-chave "implements"
 */
class Produto implements OrcavelInterface{
    private $descricao;
    private $estoque;
    private $preco;
    //...

    public function __construct($descricao,$estoque,$preco){
        $this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }
     //A classe getPreco deve estar presente em todas as classes que usam a interface OrcavelInterface 
    public function getPreco(){
        return $this->preco;
    }
}