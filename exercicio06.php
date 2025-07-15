<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores de um número</title>
</head>
<body>
    
    <form method = "POST" action="">
        <label for="divisores">Informar todos os divisores do número: </label>
        <input type="number" id="divisores" name="divisores">
        <button type="submit" name="informa_divisores">Informar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['informa_divisores'])){
            $numero = $_POST['divisores'];

            $dividor = [];
            for($i = 1; $i <= $numero; $i++){
                if($numero % $i == 0){
                    $divisor[] = $i;
                }
            }

            echo "Os divisores de $numero, são: <br>";
            foreach ($divisor as $num){
                echo $num . "<br>";
            }
        }
    }
    ?>
</body>
</html>