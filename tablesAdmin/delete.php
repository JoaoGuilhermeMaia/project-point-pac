<?php

    include("../db/connection.php");

if(isset($_GET['delete'])){
    $category_id = (int)$_GET['delete'];
    $db_connection->exec("DELETE FROM products WHERE id=$category_id"); 
    echo "Deletado com sucesso";
}

?>