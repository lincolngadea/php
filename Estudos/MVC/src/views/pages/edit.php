<?php $render('header'); ?>

<h1>ALterar Usuário</h1>

<form action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar" method="post">

    <label for="nome">Nome:
        <input type="text" name="nome" value="<?=$usuario['nome'];?>">
    </label><br><br>

    <label for="email">Email:
        <input type="email" name="email" value="<?=$usuario['email'];?>">
    </label><br><br>

    <input type="submit" value="Salvar">

</form>


<?php $render('footer'); ?>