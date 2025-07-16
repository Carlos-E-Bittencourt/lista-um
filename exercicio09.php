<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somar numeros entre valores</title>
</head>
<body>
    
    <form method = "POST" action="">
        <label for="soma_entre">Informar a soma de todos os numeros entre os seguintes números</label>
        <input type="number" id="soma_entre1" name="soma_entre1">
        <input type="number" id="soma_entre2" name="soma_entre2">
        <button type="submit" name="informa_soma">Informar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['informa_soma'])){
            $n = $_POST['soma_entre1'];
            $n2 = $_POST['soma_entre2'];
            $soma = null;

            if($n != $n2){
                for($i = $n + 1; $i < $n2; $i++){
                    $soma += $i;
                }
            }else{
                echo "Os valores precisam ser diferentes, com que o primeiro valor seja menos doque o primeiro";
            }
            echo "A soma entre os valores dados é de: $soma";
        }
    }
    ?>
</body>
</html>