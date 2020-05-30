<?php

    require_once 'classes/Preferencias.php';

    $p1 = Preferencias::getInstance();
    echo 'O Idioma é: '.$p1->getData('language')."<br>";

    $p1->setData('language','en');
    echo 'O Idioma é: '.$p1->getData('language')."<br>";

    $p2 = Preferencias::getInstance();
    echo 'O Idioma é: '.$p2->getData('language')."<br>";