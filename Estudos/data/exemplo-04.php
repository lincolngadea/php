<?php

$dt = new DateTime();

$periodo = new DateInterval("P15D"); //Adicionou mais 15 dias a data atual.
//para entender o parâmetro, checar documentação

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");