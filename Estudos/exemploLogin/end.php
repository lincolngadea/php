<?php 

session_destroy(); 
unset($_SESSION['id']);
$_SESSION['id']=null;
header('Location: index.php');
session_commit();

?>