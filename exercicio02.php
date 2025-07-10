<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero_tabuada">Digite um número para ver a sua tabuada: </label>
        <input type="number" name="numero_tabuada" id="numero_tabuada" required>
        <button type="submit" name="ver_tabuada">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['ver_tabuada'])){
                $numero = $_POST['numero_tabuada'];

                for($i = 0; $i <= 10; $i++){
                    $resultado = $numero * $i;
                    echo "<p>$numero X $i = $resultado</p>";
                }
            }
        }

    ?>
</body>
</html>