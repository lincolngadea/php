<?php

    class Preferencias{

        private $data;
        private static $instance;
        
        private function __construct(){
            $this->data = parse_ini_file('application.ini');//gera um vetor do arquivo de configuração .ini
        }

        public static function getInstance(){
            if(empty(self::$instance)){
                self::$instance = new self;//????
            }

            return self::$instance;
        }

        public function setData($key, $value){
            $this->data[$key] = $value; //transforma o $data em um array que recebe dois valores
        }

        public function getData($key){
            return $this->data[$key];
        }

        public function save(){
            $string = '';

            if($this->data){
                foreach($this->data as $key => $value){
                    $string .= "{$key} = \"{$value}\" \n";
                }
            }
            file_put_contents('application.ini', $string);
        }
    }