<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número Perfeito</title>
</head>
<body>
    
    <form method = "POST" action="">
        <label for="perfeito">Verificar se o número é Perfeito: </label>
        <input type="number" id="perfeito" name="perfeito">
        <button type="submit" name="verificar_perfeito">Verificar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['verificar_perfeito'])){
            $numero = $_POST['perfeito'];
            $resultado = 0;

            for($i = 1; $i < $numero; $i++){
                if($numero % $i == 0){
                    $resultado += $i;
                }
            }
            if($resultado == $numero){
                echo "Parabéns irmão, tu falou um número perfeito. O $numero, é perfeito";
            }else {
                echo "Não é perfeito";
            }
        }
    }
    ?>
</body>
</html>