<form action = 'inserir.php' method="POST">

    Item da Lista
    <input type="text" name="lista">
    <input type="submit" value="Salvar">
</form>
<a href="limpar.php">Excluir Dados</a>

<?php

    if(file_exists('lista.txt')){

        $lista = file_get_contents('lista.txt');

        $lista = explode("\n",$lista);
        echo '<ul>';
        foreach($lista as $value){
           echo '<li>'.$value.'</li>';
        }
        echo '</ul>';


    }