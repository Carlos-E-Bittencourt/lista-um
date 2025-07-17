<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="IMC">Escreva seu peso(em quilos): </label>
        <input type="number" step="0.1" id="IMC_peso" name="IMC_peso">
        <br>
        <label for="IMC">Escreva sua altura(em metros): </label>
        <input type="number" step="0.01" id="IMC_altura" name="IMC_altura">
        <button type="submit" name="calcular_IMC">Calcular</button>
    </form>


    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['calcular_IMC'])){
            $peso = $_POST['IMC_peso'];
            $altura = $_POST['IMC_altura'];
            $IMC = $peso/($altura ^ 2);

            if($IMC < 18.5){
                $categorias = "Abaixo do peso";    
            }if($IMC >= 18.5 && $IMC <= 24.9){
                $categorias = "Peso normal";
            }if($IMC >= 25 && $IMC <= 29.9){
                $categorias = "Sobrepeso";
            }if($IMC >= 30 && $IMC <= 34.9){
                $categorias = "Obesidade Grau I";
            }if($IMC >= 35 && $IMC <= 39.9){
                $categorias = "Obesidade Grau II";
            }if($IMC >= 40){
                $categorias = "Obesidade Grau III";
            }

            echo "Sua altura é $altura, e seu peso é $peso. Logo seu IMC é de $IMC, e você pertence a categoria: $categorias";
        }
    }
    ?>
</body>
</html>