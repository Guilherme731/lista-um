<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero_perfeito">Digite um número para ver se ele é perfeito: </label>
        <input type="number" name="numero_perfeito" id="numero_perfeito" required>
        <button type="submit" name="verificar_perfeito">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_perfeito'])){
                $numero = $_POST['numero_perfeito'];

                $soma_divisores = 0;
                for($i = 1; $i < $numero; $i++){
                    if($numero % $i == 0){
                        $soma_divisores += $i;
                    }
                }

                echo "O número $numero ".(($soma_divisores == $numero)? 'é perfeito':'não é perfeito');
            }
        }
    
    ?>
</body>
</html>