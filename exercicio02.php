<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    
    <form method = "POST" action="">
        <label for="tabuada">Mostra tabuada do numero: </label>
        <input type="number" id="tabuada" name="tabuada">
        <button type="submit" name="verificar_tabuada">Ver tabuada</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if(isset($_POST['verificar_tabuada'])){
                $numero = $_POST['tabuada'];

                if($numero < 0){
                    echo "Bota numero positivo, por favor.";
                }else {
                    echo "<h2>Tabuada do $numero:</h2>";
                    for($i = 1; $i <= 10; $i++){
                        $resultado = $numero * $i;
                        echo "$numero x $i = $resultado <br>";
                    }
                }
            }
        }
    
    ?>

</body>
</html>