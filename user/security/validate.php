<?php
    include_once '../../db/connection.php';

    session_start();

    if(!isset($_SESSION['sessionId'])){
        header('Location: ../../index.php');
    }

?>