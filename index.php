<?php
/* 
 * O conteudo da url acessada pode ser alterada por algum invasor. Se caso o servidor
 * remoto fosse modificado para outro diretório, o arquivo obtido pela aplicação
 * poderia ser modificado, trazendo outra imagem para a aplicação conforme o exemplo. 
 */
require("https://raw.githubusercontent.com/vinibiavatti1/TrabalhoSistemasDistribuidos/master/imageUrl.php?token=AGQJGLZ6RFGHPW6TIWRUUT25PEQ7A");
$image = IMG_URL;

$imageElement = "<img src='$image' />";
echo("Conteúdo sem criptografia<br>");
echo($imageElement);
echo("<br>");

/*
 * Caso o conteúdo ser obrigado a ser importado remotamente, uma das formas de mitigar a
 * vulnerabilidade seria utilizar uma forma de criptografia do conteúdo do arquivo. Isto
 * modificaria o código, trazendo as informações criptografadas, e necessariamente seriam
 * processadas pela aplicação.
 */
$image = file_get_contents("https://raw.githubusercontent.com/vinibiavatti1/TrabalhoSistemasDistribuidos/master/imageUrlEncrypted.php?token=AGQJGLZIKMEJ5KPVHHAA6O25PERJS");
$imageDecoded = base64_decode($image);

$imageElement = "<img src='$imageDecoded' />";
echo("Conteúdo com criptografia<br>");
echo($imageElement);
