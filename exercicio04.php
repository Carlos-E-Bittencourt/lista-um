<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    
    <form method = "POST" action="">
        <label for="fatorial">Informa o valor do fatorial de um número: </label>
        <input type="number" id="fatorial" name="fatorial">
        <button type="submit" name="verificar_fatorial">Verificar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['verificar_fatorial'])){
            $numero = $_POST['fatorial'];

            $resultado = 1;
            for($i = $numero; $i > 0; $i--){
                $resultado = $resultado * $i;
            }
            echo "O fatorial do número $numero é de $resultado";
        }
    }
    ?>
</body>
</html>