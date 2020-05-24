<?php

    class Calculadora{

        private $valor;
        private $resultado;
        private $operador;
        

        public function setValor($valor){
            $this->resultado += $valor;            
        }

        public function setOperador($operador, $valor){
            switch($operador){
                case '+': 
                    $this->resultado = $this->resultado + $valor;
                break;
                case '-':
                    $this->resultado = $this->resultado - $valor;
                break;
                case 'x':
                    $this->resultado = $this->resultado * $valor;
                break;
                case '/':
                    $this->resultado = $this->resultado / $valor;
                break;
            }
        }

        public function getResultado(){
            return round($this->resultado);
        }
    }

    $calc = new Calculadora();
    $calc->setValor(12);
    $calc->setValor(2);
    $calc->setOperador('-',1);
    $calc->setOperador('x',3);
    $calc->setOperador('/',2);
    //$calc->setOperador('+',0.5);

    print "Total:".$calc->getResultado();


?>