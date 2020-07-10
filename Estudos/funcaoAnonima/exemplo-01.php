<?php

    function test($callback){
       //processo convencional
        $callback();

    }

    test(function(){ //Função anônima
        echo "Terminou";
    });