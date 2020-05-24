<?php
    require 'conexao.php';

if(isset($_POST['nome']) && !empty($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $msg = addslashes($_POST['mensagem']);

    $sql = "INSERT INTO mensagens SET nome = :nome, msg = :msg, data_msg = NOW()";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':msg',$msg);
    $sql->execute();
}
?>

<fieldset>
    <form method="POST">
        Nome:<br>
        <input type="text" name="nome"></br></br>
        <textarea name="mensagem"></textarea> </br></br>
        <input type="submit" value="Enviar">
    </form>
</fieldset>
</br>

<?php
    $sql = "SELECT * FROM mensagens ORDER BY data_msg DESC";
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $mensagem):
            echo "<strong>".$mensagem['nome']."</strong> - ".$mensagem['data_msg']."<br>";

            echo "A mensagem é aqui<br><br>";
            echo $mensagem['msg']."<br>";
            echo "<hr>";
        endforeach;
    }else {
        echo "Sem mensagens";
    }
?>


