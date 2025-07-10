<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero_sinal">Digite um número para verificar se ele é positivo, negativo ou zero: </label>
        <input type="number" name="numero_sinal" id="numero_sinal">
        <button type="submit" name="verificar_sinal">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_sinal'])){
                $numero = $_POST['numero_sinal'];
                $mensagem = 'positivo';
                if($numero < 0){
                    $mensagem = 'negativo';
                }else if($numero == 0){
                    $mensagem = 'zero';
                }

                echo "O número $numero é $mensagem.";
            }
        }

    ?>
</body>
</html>