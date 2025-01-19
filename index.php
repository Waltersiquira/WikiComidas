<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <title>WikiComidas</title>
</head>
<body style="text-align: center;">
    <button><a href="form-comida.php" style="text-decoration: none;">Adcionar Comida</a></button>
    <?php require_once 'includes/wikis.php' ?>
    <h1>WikiComidas</h1>
    <hr>
    <?php 
    $busca = $wikis->query('select * from comidas');
    if (!$busca){
        echo 'Error';
    } else {
        if ($busca->num_rows == 0){
            echo 'Não existe nenhuma comida no momento';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<a href='pagina-comida.php?i=$reg->id'><img src='$reg->imagem' width='400'></a> <br> $reg->nome <br>";
            }
        }
    }
    ?>
    <?php $wikis->close() ?>
</body>
</html>