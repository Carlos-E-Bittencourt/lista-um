<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par ou Ímpar</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="par_impar">Verifica se é um número par ou ímpar</label>
        <input type="number" id="par_impar" name="par_impar">
        <button type="submit" name="verificar_par_impar">Verificar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['verificar_par_impar'])){
            $numero = $_POST['par_impar'];

            $ehPar = true;

            if($numero % 2 == 0){
                $ehPar = true;
            } else {
                $ehPar = false;
            }
            echo "O numero $numero é ". ($ehPar ? "par" : "ímpar");
        };

    }

    ?>

</body>
</html>