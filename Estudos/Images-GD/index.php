<?php

    $imagem = imagecreatetruecolor(300,300); // Define as dimenssões da imagem

    $cor = imagecolorallocate($imagem,255,0,0); //define a cor com paleta RGB

    imagefill($imagem, 0, 0, $cor); //Preenche a imagem e suas posições

    header("Content-type: image/jpg");//Transforma o arquivo em uma imagem

    //imagejpeg($imagem, null, 100);//gera a imagem, local e qualidade(0 a 100)

    imagejpeg($imagem, 'nova_imagem.jpg', 100);//gera a imagem e salva na pasta
