<?php
   // $texto = file_get_contents('texto.txt');

    //$texto = explode("\n", $texto);

    //echo 'LINHAS: '.count($texto);

    $dados = "\nUM NOVO TEXTO";
    $texto2 = file_put_contents('texto2.txt',$dados);

    file_put_contents('texto.txt',file_get_contents('texto.txt').$dados);

?>