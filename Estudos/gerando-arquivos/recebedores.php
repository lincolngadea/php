<?php
    if(isset($_FILES['arquivo'])){
        if(count($_FILES['arquivo']['tmp_name']) > 0){

            for($q=0;$q<count($_FILES['arquivo']['tmp_name']);$q++){
                $nomearquivo = md5($_FILES['arquivo']['name'][$q].time().rand());
                move_uploaded_file($_FILES['arquivo']['tmp_name'][$q],'arquivos/'.$nomearquivo);

            }
            echo 'Arquivo atualizado';
        }
    }
?>