<?php

include ("conecta.php");

$sql = "SELECT * FROM arquivos";

$resultado = mysqli_query($mysql, $sql);

if ($resultado != false) {
    
    $arquivos = mysqli_fetch_all($resultado, MYSQLI_BOTH);
   

}else {

    echo "Deu error";
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">        

<head> 

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 

</head>

<body>

    <h1>Informe o arquivo.</h1>

    <form action="upload.php" enctype="multipart/form-data" method="post">

        <label for="arquivo">Informe o seu arquivo</label>
        <input type="file" name="arquivo"><br><br>

        <input type="submit" value="Enviar">
    </form>
    <br><br>

    <hr>

    <table border="2">

    <thead>

        <tr>

            <th>Nome do arquivo</th>
            <th colspan="2">Opções</th>

        </tr>

    </thead>

    <tbody>

    <?php

    foreach ($arquivos as $arquivo) {
        
        echo "<tr><td>" . $arquivo['nome_arquivo'] . "</td>";

        echo "<td><a href= 'alterar.php?nome_arquivo=" . $arquivo['nome_arquivo'] . "' >Alterar</td>";

        echo "<td><button>Excluir</button></td>";
    }

    ?>

    </tbody>

    </table>

</body>

</html>
