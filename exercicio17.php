<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data válida</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="data">Verificar se uma data é válida: </label>
        <input type="date" id="data" name="data">
        <button type="submit" name="verificar_data">Verificar</button>
    </form>


    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['verificar_data'])){
            $data = $_POST['data'];

            echo "A data $data, é uma data válida";
        }
    }
    ?>
</body>
</html>