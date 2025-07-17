<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius para Fahrenheit</title>
</head>
<body>

    <form method="POST" action="">
        <label for="cel_to_fah">Converter uma temperatura de Celsius para Fahrenheit: </label>
        <input type="number" id="cel_to_fah" name="cel_to_fah">
        <button type="submir" name="converter_celsius">Converter</button>
    </form>


    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['converter_celsius'])){
            $temp = $_POST['cel_to_fah'];

            $tempFah = (1.8 * $temp) + 32;
            echo "A temperatura em celsius: $temp °C, em Fahrenheit fica: $tempFah °F";
        }
    }
    ?>
</body>
</html>