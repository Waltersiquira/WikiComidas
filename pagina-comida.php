<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_back" />
    <title>WikiComidas</title>
</head>
<body>
    <?php require_once 'includes/wikis.php' ?>
    <?php 
    $id = $_GET['i'] ?? 1;
    $busca = $wikis->query("select * from comidas where id = '$id'");
    if (!$busca){
        echo 'Error';
    } else {
        if ($busca->num_rows == 0){
            echo 'Não existe uma comida dessa no momento';
        } else {
            while ($reg=$busca->fetch_object()){
                echo "<img src='$reg->imagem' width='300'> <h1>$reg->nome</h1> Nota: $reg->nota/10.0 <hr> <p>$reg->descrição</p>";
            }
        }
    }
    ?>
    <button><a href="index.php"><span class="material-symbols-outlined">arrow_back</span></a></button>
    <?php $wikis->close() ?>
</body>
</html>