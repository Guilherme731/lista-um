<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero_amigo_1">Digite um número: </label>
        <input type="number" name="numero_amigo_1" id="numero_amigo_1">
        <label for="numero_amigo_2">Digite outro número para ver se eles são amigos: </label>
        <input type="number" name="numero_amigo_2" id="numero_amigo_2">
        <button type="submit" name="verificar_amigos">Enviar</button>
    </form>

    <?php
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['verificar_amigos'])){
                $numero1 = $_POST['numero_amigo_1'];
                $numero2 = $_POST['numero_amigo_2'];

                $soma_divisores_numero1 = 0;
                for($i = 1; $i < $numero1; $i++){
                    if($numero1 % $i == 0){
                        $soma_divisores_numero1 += $i;
                    }
                }

                $soma_divisores_numero2 = 0;
                for($i = 1; $i < $numero2; $i++){
                    if($numero2 % $i == 0){
                        $soma_divisores_numero2 += $i;
                    }
                }

                if($soma_divisores_numero1 == $numero2 && $soma_divisores_numero2 == $numero1){
                    echo "Os números $numero1 e $numero2 são amigos";
                }else{
                    echo "Os números $numero1 e $numero2 não são amigos";
                }
            }
        }

    ?>
</body>
</html>