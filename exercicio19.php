<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senha forte</title>
</head>
<body>
    
    <form method="POST" action="">
        <label for="senha">Verificar se sua senha é forte: </label>
        <input type="password" id="senha" name="senha">
        <button type="submit" name="verificar_senha">Verificar</button>
    </form>

    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        if(isset($_POST['verificar_senha'])){
            $senha = $_POST['senha']; 
            $regex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/";

            if(preg_match($regex, $senha)){
                echo "Senha válida";
            }else{
                echo "Senha inválida";
            }
        }
    }
    ?>
</body>
</html>