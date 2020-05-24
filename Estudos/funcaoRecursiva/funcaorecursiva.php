<?php 

    function dividir($numero){

        $resultado = $numero / 2;
        echo $resultado."<br>";

        if(round($resultado) > 0){
            dividir($resultado);
        }

    }

    dividir(500);
?>