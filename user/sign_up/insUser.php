<?php
    include_once '../../db/connection.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordMD5 = md5($password);
    $admin = 0;

    $sql = "INSERT INTO users (name, email, password, admin) VALUES (:name, :email, :password, :admin)";

    $stm_sql = $db_connection->prepare($sql); 
    $stm_sql->bindParam(':name', $name);
    $stm_sql->bindParam(':email', $email);
    $stm_sql->bindParam(':password', $passwordMD5);
    $stm_sql->bindParam(':admin', $admin);
    $result = $stm_sql->execute();
?>