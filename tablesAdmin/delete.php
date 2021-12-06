<?php

    include_once "../db/connection.php";

if(isset($_GET['id'])){
    $category_id = (int)$_GET['id'];
    $db_connection->exec("DELETE FROM products WHERE category_id = $category_id"); 

    header("Location: tableProducts.php");
    echo "Deletado com sucesso";
}

?>