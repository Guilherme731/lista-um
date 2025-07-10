<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero_divisores">Digite um número para ver todos os seus divisores: </label>
        <input type="number" name="numero_divisores" id="numero_divisores" required>
        <button type="submit" name="ver_divisores">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['ver_divisores'])){
                $numero = $_POST['numero_divisores'];
                
                for($i = 1; $i <= $numero; $i++){
                    if($numero % $i == 0){
                        echo "<p>$i</p>";
                    }
                    
                }
            }
        }
    
    ?>
</body>
</html>