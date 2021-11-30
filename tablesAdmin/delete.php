<?php 

session_start();
ob_start();

include("../db/connection.php");

filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
var_dump($$dado["iduser"]);

if(empty($$dado["iduser"])){
    $_SESSION[] = "<p style='color: #f00;'>ERRO: Usuário não encontrado!</p>";
    header("Location: tableAdmin.php");
    exit();
}

?>