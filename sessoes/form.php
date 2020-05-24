<?php 
    session_start();
    if(!$_SESSION['logon']) header("LOCATION: index.php");
require_once 'header.php'

?>
<body>
        <H1>ESTÁ LOGADO</H1>
        <a href="logout.php">Sair</a>
</body>
</html>