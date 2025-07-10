<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero_soma_1">Digite um número: </label>
        <input type="number" name="numero_soma_1" id="numero_soma_1" required>
        <label for="numero_soma_2">Digite outro número para ver a soma dos números entre eles: </label>
        <input type="number" name="numero_soma_2" id="numero_soma_2" required>
        <button type="submit" name="soma_entre_numeros">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['soma_entre_numeros'])){
                $numero1 = $_POST['numero_soma_1'];
                $numero2 = $_POST['numero_soma_2'];

                $soma = 0;
                for($i = $numero1; $i <= $numero2; $i++){
                    $soma += $i;
                }

                echo "A soma dos números entre $numero1 e $numero2 é $soma";
            }
        }
    ?>
</body>
</html>