<?php
    include_once '../../db/connection.php';

    $email    = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE (email = :email, password = :password)";

    $stm_sql = $db_connection -> prepare($sql);
    $stm_sql -> bindParam(':email', $email);
    $stm_sql -> bindParam(':password', $password);

    $result = $stm_sql -> execute(PDO::FETCH_ASSOC);

?>