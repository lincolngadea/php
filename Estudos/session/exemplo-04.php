<?php

require_once 'config.php';

session_regenerate_id(); //Gera um novo ID de Sessão
//Usado sempre que for iniciar uma nova sessão de usuário, por segurança.

echo session_id();

echo '<br>';

var_dump($_SESSION);