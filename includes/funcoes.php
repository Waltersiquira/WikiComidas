<?php 
function proteger_contra_xss_e_sql_injection($valor){
    require_once 'wikis.php';
    global $wikis;
    $valor = $wikis->real_escape_string($valor);
    $valor = htmlspecialchars($valor);
    return $valor;
}
?>