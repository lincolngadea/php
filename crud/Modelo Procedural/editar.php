<?php
    require_once 'config.php';

    $id = filter_input(INPUT_GET,'id');
    if($id){
        $info = [];
        $sql= $pdo->prepare("SELECT * FROM usuario WHERE id= :id");
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch(PDO::FETCH_ASSOC);
        }else{
            header('LOCATION: lista.php');
            exit;
        }
    }
?>

<form action="editar_action.php" method="POST">

    <input type="hidden" name="id" value="<?=$info['id']?>">

    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario" value = "<?=$info['nome']?>"><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" value = "<?=$info['email']?>"><br><br>

    <label for="senha">Senha:</label>
    <input type="password" name="senha"><br><br>

    <input type="submit" value="Alterar">

</form>