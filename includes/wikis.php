<?php 
$wikis = new mysqli('localhost', 'root', '', 'wikis');
if ($wikis->connect_error){
    die('Erro de Conexão com banco de dados');
}
$wikis->query('set character_set_connection = utf8mb4');
$wikis->query('set character_set_client = utf8mb4');
$wikis->query('set character_set_results = utf8mb4');
?>