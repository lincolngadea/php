
<?php require 'header.php'; ?>
<a href="apagarcokie.php">APAGAR COCKIE</a>
<form method='POST' action="recebedor.php">
    <label for="nome">Nome:</label>
    <input type="text" name="nome"><br><br>

    <label for="telefone">Telefone:</label>
    <input type="text" name="telefone"><br><br>

    <label for="email">Email:</label>
    <input type="text" name="email"><br><br>

    <input type="submit" value="Enviar">
</form>