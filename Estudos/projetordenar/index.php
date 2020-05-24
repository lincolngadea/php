<?php
    require 'conexao.php';
    if(isset($_GET['ordem']) && !empty($_GET['ordem'])){

        $ordem = addslashes($_GET['ordem']);
        $sql = "SELECT * FROM usuarios ORDER BY :ordem";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':ordem',$ordem);     
        
    }else{
        $ordem = '';
        $sql = "SELECT * FROM usuarios";
        $sql = $pdo->prepare($sql);
    }  
?>
<form method="GET" >
    <select name="ordem" onchange="this.form.submit()">
        <option></option>
        <option value="nome" <?php echo ($ordem =="nome")?'selected="selected"':'';?>>Ordenar por Nome</option>
        <option value="idade"  <?php echo ($ordem =="idade")?'selected="selected"':'';?>>Ordenar por Idade</option>
    </select>
</form>
<table border="1" width="400">
    <tr>
        <th>id</th>
        <th>Nome</th>
        <th>Idade</th>
    </tr>

<?php
   
    $sql->execute();    
    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $dados){
         echo "<tr>";
         echo "<td>".$dados['id']."</td>";
         echo "<td>".$dados['nome']."</td>";
         echo "<td>".$dados['idade']."</td>";
         echo "</tr>";
        }
    }
?>

</table>
