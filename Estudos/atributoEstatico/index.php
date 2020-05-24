<?

    class Software{
        private $id;
        private $nome;
        private static $contador;//Será incrementado de acordo com a quantidade de vezes que a classe for instanciada.

        function __construct($nome)
        {
            self::$contador++;
            $this->id = self::$contador; //Acessa o atributo estático de dentro da Classe
            $this->nome = $nome;

            print "Software {$this->id} - {$this->nome}<br>";
        }

        public static function getContador(){ //cria método estático para acessar o atributo estático privado.
            return Software::$contador;
        }
    }

    new Software('Ampitec');
    new Software('SofCom');
    new Software('Gtec');

    echo 'Quantidade Criada = '.Software::getContador(); //acessa o atributo estático privado de fora da classe por meio do método getContador