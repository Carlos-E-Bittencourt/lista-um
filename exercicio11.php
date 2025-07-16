<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palíndromo</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="palavra">Verifica se uma palavra é um palíndromo: </label>
        <input type="text" id="palavra" name="palavra">
        <button type="submit" name="verificar_palavra" >Verificar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['verificar_palavra'])){
            $palavra = $_POST['palavra'];
            $palavraIv = strrev($palavra);

            if($palavra == $palavraIv){
                echo "Está palavra é um palíndromo";
            }else{
                echo "Está palavra NÃO é um palíndromo";
            }
        }
    }
    ?>
</body>
</html>