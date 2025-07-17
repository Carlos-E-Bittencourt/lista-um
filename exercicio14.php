<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anos Bissextos</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="bissexto">Verificar se um ano é bissexto: </label>
        <input type="number" id="bissexto" name="bissexto">
        <button type="submit" name="verificar_bissexto">Verificar</button>
    </form>


    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['verificar_bissexto'])){
            $ano = $_POST['bissexto'];

            $bissexto = true;
            if($ano % 4 == 0){
                if($ano % 100 == 0 && $ano % 400 != 0){
                    $bissexto = false;
                }else{
                    $bissexto = true;
                }
            }else{
                $bissexto = false;
            }

            if($bissexto){
                echo "O ano $ano, é bissexto";
            }else{
                echo "O ano $ano, NÃO é bissexto";
            }
        }
    }
    ?>
</body>
</html>