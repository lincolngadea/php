<?php $render('header'); ?>

<a href="<?=$base;?>/novo">Novo Usuário</a>

<table border="1" width="100%">
   <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
   </tr>
   <?php foreach($usuarios as $usuario):?>
   <tr>       
        <td><?=$usuario['id']?></td>
        <td><?=$usuario['nome']?></td>
        <td><?=$usuario['email']?></td>
        <td>
            <a href="<?=$base?>/usuario/<?=$usuario['id']?>/editar"><img width="20" src="<?=$base;?>/assets/images/document.png"></a> 
            <a href="<?=$base?>/usuario/<?=$usuario['id']?>/excluir" onclick="return confirm('Tem Certeza que deseja Excluir?')"><img width="20" src="<?=$base;?>/assets/images/trash.png"></a>        
        </td>        
   </tr>
   <?php endforeach;?> 

</table>

<?php $render('footer'); ?>