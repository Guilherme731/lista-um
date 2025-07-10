<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero_fatorial">Digite um número para ver seu fatorial: </label>
        <input type="number" name="numero_fatorial" id="numero_fatorial">
        <button type="submit" name="verificar_fatorial">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_fatorial'])){
                $numero = $_POST['numero_fatorial'];
                $fatorial = $numero;
                for($i = $numero - 1; $i > 0; $i--){
                    $fatorial *= $i;
                }
                if($numero == 0){
                    $fatorial = 1;
                }
                
                echo "O fatorial de $numero é $fatorial.";
            }
        }

    ?>
</body>
</html>