<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>

    <h1>About</h1>
    <br><br>

    <?php foreach ($this->view->info as $key => $info) { ?>

        <h2><?= $info['titulo'] ?></h2>
        <p><?= $info['descricao'] ?></p>
        <hr>

    <?php } ?>

</body>
</html>
