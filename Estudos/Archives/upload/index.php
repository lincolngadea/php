<?php 
    session_start();
    if (isset($_SESSION['upload'])){
        echo $_SESSION['upload'];
        $_SESSION['upload']='';
    }
?>
<form action="recebedor.php" method="POST" enctype="multipart/form-data">
    Arquivo:<input type="file" name="arquivo">
    <input type="submit" value="Upload">
</form>