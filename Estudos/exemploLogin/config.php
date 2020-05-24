<?php

$dsn="mysql:dbname=estudo1;host=localhost";
$dbuser="root";
$dbpass='';;

try{
	$pdo = new PDO($dsn,$dbuser,$dbpass);

}catch(PDOException $e){
	echo "Erro na conexão:".$e->getmessage();
}

?>