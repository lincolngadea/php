<?php 

    function soma(int ...$valores):string{ //Nesse caso converte o retorno para uma string
        return array_sum($valores);
    }

    echo soma(2,2);
    echo "<br>";

    echo soma(25,32);
    echo "<br>";

    echo soma(2.5,2.2);
    echo "<br>";

    /**
     * Basicamente essa função aceita vários valores como parâmetro independente da quantidade e soma apenas 
     * valores inteiros.
     */