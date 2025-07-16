<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vogais na palavra</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="vogais">Contar a quantidade de vogais na palavra: </label>
        <input type="text" id="vogais" name="vogais">
        <button type="submit" name="contar_vogais">Contar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['contar_vogais'])){
            $palavra = $_POST['vogais'];
            $vogais = "aeiouAEIOU";
            $contador = null;

            for($i = )
        }
    }
    ?>
</body>
</html>