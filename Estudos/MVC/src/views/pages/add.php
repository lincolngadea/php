<?php $render('header'); ?>

<h1>Adicionar Novo Usuário</h1>

<form action="<?=$base;?>/novo" method="post">

    <label for="nome">Nome:
        <input type="text" name="nome">
    </label><br><br>

    <label for="email">Email:
        <input type="email" name="email">
    </label><br><br>

    <input type="submit" value="Inserir">

</form>


<?php $render('footer'); ?>