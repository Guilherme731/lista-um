<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <form action="" method="post">
        <label for="numero">Digite um número para ver se ele é par ou ímpar: </label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit" name="verificar_par_impar">Enviar</button>
    </form>
    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_par_impar'])){
                $numero = $_POST['numero'];
                $ehPar = true;
                if($numero % 2 != 0){
                    $ehPar = false;
                }

                echo 'O número é '. ($ehPar? 'par':'ímpar');
            }
        }

    ?>
</body>
</html>