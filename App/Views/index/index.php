<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
</head>
<body>
  
    <h1>Welcome</h1>
    <br><br>

    <?php

        foreach ($this->view->dados as $index => $produto) {
            echo "<strong>ID do produto:</strong> " . $produto['id'] . "<br>";
            echo "<strong>Nome do produto:</strong> " . $produto['descricao'] . "<br>";
            echo "<strong>Preço do produto:</strong> " . $produto['preco'] . "<br>";

            echo "<hr>";
        }
    
    ?>

</body>
</html>
