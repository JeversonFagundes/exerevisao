<?php

//receber a escolha do usuário e armazenar em um cookie que deve durar 7 dias

if ($_POST) {
    
    $tema = $_POST['tema'];

    var_dump($tema);

   setcookie($tema, "cookie", time() + 10);

   if (isset($_COOKIE[$tema]) == "Escuro") {
    
    ?>

    <style>

        body{
            background-color: grey;
        }
    </style>

    <?php

   }else {
    
    if ($_COOKIE[$tema] == "Branco") {
    
        ?>

        <style>

            body{
                color: red;
            }
        </style>

        <?php

    }else {
        
        if (!isset($_COOKIE[$tema])) {
            
            echo "Não tem cookie aqui!";
        }
    }
   }
}




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha o seu tema</title>
</head>

<body>

<h1>Escolha o tema!</h1>

<form action="" method="post">

<label for="escuro">Escuro:</label>
<input type="radio" name="tema"  id="escuro" value="Escuro" ><br><br>

<label for="claro">Branco:</label>
<input type="radio" name="tema" id="claro" value="Branco"><br><br>

<input type="submit" value="Enviar escolha">
</form>
    
</body>

</html>