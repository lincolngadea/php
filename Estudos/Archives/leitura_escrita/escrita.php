<?php

    $texto = file_get_contents('nome.txt');
    $texto .= "\nLincoln";

    file_put_contents('nome.txt',$texto);

    echo 'Arquivo Criado';