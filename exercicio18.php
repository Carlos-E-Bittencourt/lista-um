<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maior número</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="numero">Informe três numêros: </label>
        <input type="number" id="n1" name="n1">
        <input type="number" id="n2" name="n2">
        <input type="number" id="n3" name="n3">
        <button type="submit" name="verificar_maior">Verificar</button>
    </form>


    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['verificar_maior'])){
            $n1 = $_POST['n1'];
            $n2 = $_POST['n2'];
            $n3 = $_POST['n3'];

            if($n1 > $n2 && $n1 > $n3){
                echo "O número $n1, é o maior número";
            }elseif($n2 > $n1 && $n2 > $n3){
                echo "O número $n2, é o maior número";
            }elseif($n3 > $n1 && $n3 > $n2){
                echo "O número $n3, é o maior número";
            }
        }
    }
    ?>
</body>
</html>