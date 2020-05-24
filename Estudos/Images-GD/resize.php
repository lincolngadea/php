<?php
 //imagem que será redimenssionada
$arquivo = 'imagem2.jpg';

//dimensões máximas de largura e altura
$maxWidth = 300;
$maxHeight = 300;

/**pegas as informações de tamanho do arquivo, transforma em um array e pega as duas primeiras informações
 * que são as dimenssões e insere em um array da função list
 * */
list($originalWidth, $originalHeight) = getimagesize($arquivo);

//acha a proporção da imagem. Dividindo largura por altura
$ratio = $originalWidth / $originalHeight; 
$ratioDest = $maxWidth / $maxHeight;

$finalWidth = 0;
$finalHeight = 0;

if($ratioDest > $ratio){
    $finalWidth = $maxHeight * $ratio;
    $finalHeight = $maxHeight;
}else{
    $finalHeight = $maxWidth / $ratio;
    $finalWidth = $maxWidth;
}

$imagem = imagecreatetruecolor($finalWidth, $finalHeight);

$originalImg = imagecreatefromjpeg($arquivo);

imagecopyresampled(
    $imagem,
    $originalImg,
    0,0,0,0,
    $finalWidth,$finalHeight,
    $originalWidth,$originalWidth
);

header("Content-type: image/jpeg");
imagejpeg($imagem, null, 100);


