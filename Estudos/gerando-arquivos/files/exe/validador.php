<?php
    
    $lista =filter_input(INPUT_POST,'lista',FILTER_SANITIZE_SPECIAL_CHARS);

    file_get_contents('lista.txt',$lista)
?>
    <h2>LISTA DE NOMES</h2>

    <ul>
        <li><?PHP  file_put_contents('lista.txt',);?></li>
    </ul>

    <?php
    
    

    
