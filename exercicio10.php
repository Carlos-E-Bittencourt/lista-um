<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sequência de Fibonacci</title>
</head>
<body>

    <form method="POST" action="">
        <label for="fibonacci">Insira um valor, para mostrar a sequencia de Fibonacci, fazendo com que a quantidade de numeros mostrados seja a do numero inserido: </label>
        <input type="number" id="fibonacci" name="fibonacci">
        <button type="submit" name="informar_fibonacci">Informar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['informar_fibonacci'])){
            $numero = $_POST['fibonacci'];
            $fibonacci = [0, 1];

            for($i = $fibonacci[1]; $i <= $numero; $i++){
                $fibonacci[$i + 1] = $fibonacci[$i - 1] + $fibonacci[$i];
            }
            echo "A sequêcia de fibonacci com o tamanho de $numero numeros é de <br>";
            foreach($fibonacci as $num){
                echo $num . "<br>";
            }
        }
    }
    ?>
</body>
</html>