<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero_fibonacci">Digite um número para ver a sequencia de Fibonacci: </label>
        <input type="number" name="numero_fibonacci" id="numero_fibonacci" required>
        <button type="submit" name="ver_fibonacci">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['ver_fibonacci'])){
                $numero = $_POST['numero_fibonacci'];
                
                
                if($numero >= 0){
                    echo "<p>0</p>";
                }
                if($numero >= 1){
                    echo "<p>1</p>";
                }

                $i = 2;
                $resultado_fibonacci_m2 = 0;
                $resultado_fibonacci_m1 = 1;
                $resultado_fibonacci = 0;
                while($resultado_fibonacci < $numero){
                    
                    $resultado_fibonacci = $resultado_fibonacci_m1 + $resultado_fibonacci_m2;
                    $resultado_fibonacci_m2 = $resultado_fibonacci_m1;
                    $resultado_fibonacci_m1 = $resultado_fibonacci;
                    if($resultado_fibonacci <= $numero){
                        echo "<p>$resultado_fibonacci</p>";
                    }
                    
                }

            }
        }
    
    ?>
</body>
</html>