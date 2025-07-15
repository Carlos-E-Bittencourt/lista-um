<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negativo ou Positivo</title>
</head>
<body>
    
    <form method = "POST" action="">
        <label for="posi_nega_zero">Verifica se um número é Positivo, Negativo ou Zero</label>
        <input type="number" id="posi_nega_zero" name="posi_nega_zero">
        <button type="submit" name="verifica_sinal">Verificar</button>
    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['verifica_sinal'])){
            $numero = $_POST['posi_nega_zero'];

            if($numero == 0){
                $ehPositivo = "é Zero";
            }elseif($numero > 0){
                $ehPositivo = "é Positivo";
            }elseif ($numero < 0){
                $ehPositivo = "é Negativo";
            }
            echo "O numero $numero, $ehPositivo";
        }
    }

    ?>
</body>
</html>