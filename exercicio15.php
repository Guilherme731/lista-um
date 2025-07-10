<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15</title>
</head>
<body>
    <form action="" method="POST">
        <label for="peso">Digite seu peso: </label>
        <input type="number" step=".01" name="peso" id="peso" required>
        <label for="altura">Digite sua altura: </label>
        <input type="number" step=".01" name="altura" id="altura" required>
        <button type="submit" name="calcular_imc">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['calcular_imc'])){
                $peso = $_POST['peso'];
                $altura = $_POST['altura'];

                $imc = $peso / (pow($altura, 2));

                echo "Seu IMC é $imc";
                

            }
        }
    
    ?>
</body>
</html>