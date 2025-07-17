<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votar</title>
</head>
<body>

     <form method="POST" action="">
        <label for="voto">Escreva seu nome </label>
        <input type="text" id="voto1" name="voto1">
        <br>
        <label for="IMC">Escreva sua idade: </label>
        <input type="number" id="voto2" name="voto2">
        <br>
        <button type="submit" name="calcular_voto">Verificar</button>
    </form>


    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['calcular_voto'])){
            $nome = $_POST['voto1'];
            $idade = $_POST['voto2'];
            $votar = true;
            if($idade >= 16){
                $votar = true;
            }else{
                $votar = false;
            }

            if($votar){
                echo "Nome: $nome <br>";
                echo "Idade: $idade <br>";
                echo "Voto: Permitido";
            }else{
                echo "Nome: $nome <br>";
                echo "Idade: $idade <br>";
                echo "Voto: Não Permitido";
            }
        }
    }



    ?>
</body>
</html>