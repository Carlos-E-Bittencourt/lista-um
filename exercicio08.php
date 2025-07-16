<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N° Pares entre 1 e n°.</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="pares_entre">Informa quantos números pares existem entre 1 e o número: </label>
        <input type="number" id="pares_entre" name="pares_entre">
        <button type="submit" name="informa_pares">Informar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
        if(isset($_POST['informa_pares'])){
            $numero = $_POST['pares_entre'];
            $pares = [];

            for($i = 1; $i < $numero; $i++){
                if($i % 2 == 0){
                    $pares[] = $i;
                }
            }
            echo "Os números pares entre 1 e $numero são: <br>";
            foreach ($pares as $nums){
                echo $nums . "<br>";
            };
        }
    }
    ?>
</body>
</html>