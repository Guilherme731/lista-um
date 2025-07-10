<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero_quantidade_pares">Digite um número para saber quantos números pares existem entre ele e o 1: </label>
        <input type="number" name="numero_quantidade_pares" id="numero_quantidade_pares" required>
        <button type="submit" name="verificar_quantidade_pares">Enviar</button>
    </form>
    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_quantidade_pares'])){
                $numero = $_POST['numero_quantidade_pares'];

                $quantidade_pares = (int)($numero / 2);
                echo "Existem $quantidade_pares números pares entre 1 e $numero";
            }
        }
    
    ?>
</body>
</html>