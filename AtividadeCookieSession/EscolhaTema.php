<?php

//receber a escolha do usuário e armazenar em um cookie que deve durar 7 dias

if (isset ($_POST)) {
    
    $tema = $_POST['tema'];

    if ($tema == 1) {
        
        setcookie("Escuro", "Black" , time() + 10);

        echo "O tema é : " . $_COOKIE['Escuro'];

        if (isset($_COOKIE['escuro'])) {
            
            ?>

            <style>
    
                body{
                    background-color: black;
    
                    color: white;
                }
            </style>

       

        <?php

    }else {
        
        if ($tema == 2) {
            
            setcookie("Branco"," White", time() + 10);

            echo "O tema é : " . $_COOKIE['Branco'];

            ?>

            <style>

                body{
                    background-color: white;
                    color: red;

                }
            </style>

            <?php

        }else {
            
            if (!isset($_COOKIE['Escuro']) and !isset($_COOKIE['Branco'])) {
                
                echo "Não existe cookie!";
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
<input type="radio" name="tema"  id="escuro" value="1" ><br><br>

<label for="claro">Branco:</label>
<input type="radio" name="tema" id="claro" value="2"><br><br>

<input type="submit" value="Enviar escolha">
</form>
    
</body>

</html>