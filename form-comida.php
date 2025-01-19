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
    <?php 
    require_once 'includes/wikis.php';
    require_once 'includes/funcoes.php';
    ?>
    <form method="get">
        digite o nome da comida <br>
        <input type="text" name="nome"> <br>
        digite a descrição da comida <br>
        <input type="text" name="descricao"> <br>
        digite a nota da comida <br>
        <input type="text" name="nota"> <br>
        digite a url da imagem da comida <br>
        <input type="text" name="imagem"> <br>
    </form>
    <?php 
    $nome = proteger_contra_xss_e_sql_injection($_GET['nome'] ?? '');
    $descricao = proteger_contra_xss_e_sql_injection($_GET['descricao'] ?? '');
    $nota = proteger_contra_xss_e_sql_injection($_GET['nota'] ?? '');
    $imagem = proteger_contra_xss_e_sql_injection($_GET['imagem'] ?? '');
    if (!empty($nome) and !empty($descricao) and !empty($nota) and !empty($imagem)){
        if ($wikis->query("INSERT INTO comidas VALUES (DEFAULT, '$nome', '$descricao', '$nota', '$imagem')") == true){
            echo "Comida adcionada com sucesso✅ <br>";
        } else {
            echo 'Erro ao Inserir Dados <br>';
        }
    } else {
        echo 'Adicione os Dados da Comida <br>';
    }
    ?>
    <button><a href="index.php" style="text-decoration: none;"><span class="material-symbols-outlined">arrow_back</span></a></button>
    <?php $wikis->close() ?>
</body>
</html>