<?php
session_start();

if(isset($_SESSION['aviso'])){
    echo $_SESSION['aviso'];
    $_SESSION['aviso']='';
}
if(isset($_SESSION['logon'])){
    header ("LOCATION: form.php");
}


require_once 'header.php';    

?>



<h1>PÁGINA DE LOGIN</h1>
<HR>
<form  method="POST" action="verificador.php">        
    Email:
    <input type="email" name="email"><br><br>
    Password:
    <input type="password" name="senha"><br><br>
    <input type="submit" value="Enviar">
</form>

