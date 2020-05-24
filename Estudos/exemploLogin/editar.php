<?php
require 'config.php';

if(isset($_GET['id']) && !empty($_GET['id'])){

    $id = addslashes($_GET['id']);

    if(isset($_POST['nome']) && !empty($_POST['nome'])){

        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);


        $sql = "UPDATE usuario SET nome = :nome, email = :email WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':nome',$nome);
        $sql->bindValue(':email',$email);
        $sql->bindValue(':id',$id);
        $sql->execute();

        echo 'Dados Atualizados com Sucesso!';
        header ('Location: listardados.php');

    }else{

        $sql = "SELECT * FROM usuario WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':id',$id);
        $sql->execute();

        if ($sql->rowCount() > 0){
            $dados = $sql->fetch();
        }else{
            echo 'Dados Vazios...';
        }
    }   
}else{
    echo 'Algo deu Errado com o GET';
}

?>

<form method="POST">
    Nome:<br>
        <input type="text" name="nome" value="<?php echo $dados['nome']; ?>"><br><br>
    Email:<br>
        <input type="email" name="email" value="<?php echo $dados['email']; ?>"><br><br>
        <input type="submit" value="Atualizar">
</form>