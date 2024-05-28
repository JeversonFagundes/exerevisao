<?php

$pastaDestino = "arquivos/";

var_dump($_FILES);

var_dump($_FILES['arquivo'] ['size']);

//varificar se o tamanho do arquivo é maior do que 2MB.
if ($_FILES['arquivo'] ['size'] > 2000000) {
    
    echo "Este arquivo é maior do que o permitido!";

    die();

}else {

    //continuar o upload normalmente.
    
}
?>