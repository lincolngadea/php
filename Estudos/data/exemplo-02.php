<?php

//$ts =  strtotime("2020-07-09");

//$ts =  strtotime("now");

$ts =  strtotime("+1 day");

echo date("l, d/m/Y", $ts);