<?php
    //função get_class_methods
    /*
    Retorna um vetor com os nomes dos métodos de uma determinada classe
    */

    //exemplo

    // class Funcionario{
    //     function setSalario(){}
    //     function getSalario(){}
    //     function setNome(){}
    //     function getNome(){}
    // }

    // print_r(get_class_methods('Funcionario'));

    /***********************************************
     * *********************************************
     ************************************************/

     //Função get_objects_vars

     /** Retorna um Vetor com os conteúdos das propriedades públicas de um objeto */

     //exemplo

    //  class Funcionario{
    //      public $nome;
    //      public $salario;
    //      public $departamento;
    //  }

    //  $colaborador = new Funcionario;
    //  $colaborador->nome = 'Lincoln Gadéa';
    //  $colaborador->departamento = 'Informática';
    //  $colaborador->salario = 3000;

    //  print_r(get_object_vars($colaborador));

    //Função get_class

    /**Retorna o nome da classe à qual um objeto pertence. 
     * 
     * Função get_parent_class
     * Retorna o nome da classe ancestral(classe pai)
     * 
     * função is_subclass_of
     * Indica se determinado objeto ou determinada classe são derivados de outra classe
     * 
     * Exemplo:
    */

    // class Funcionario{
    //     public $nome;
    //     public $salario;
    //     public $departamento;
    // }

    // class Estagiario extends Funcionario{
    //     public $bolsa;
    // }

    // $Pedro = new Funcionario;
    // $Rafael = new Estagiario;

    // echo get_class($Pedro).'<br>';
    // echo get_class($Rafael).'<br>';
    // echo get_parent_class($Rafael);
    // echo get_parent_class('Estagiario').'<br>';

    // if(is_subclass_of($Pedro,'Funcionario')){
    //     echo "Classe do objeto Pedro é derivada de Funcionário<br>";
    // }
    // if(is_subclass_of('Estagiario','Funcionario')){
    //     echo "Classe Estagiário é derivada de Funcionário";
    // }

    //Função method_exists

    /**Verifica se determinado objeto contém o método descrito */

    //Exemplo

    class Funcionario{
        public $nome;
        public $salário;
        public $departamento;

        function setSalario(){}
        function getSalario(){}
    }

    $lincoln = new Funcionario;
    if(method_exists($lincoln, 'setNome')){
        echo 'Objeto Lincoln contém o método setNome()';
    }
    if(method_exists($lincoln,'setSalario')){
        echo 'Objeto Lincoln contém o método setSalario()';
    }