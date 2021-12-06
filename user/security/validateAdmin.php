<?php
include_once '../../db/connection.php';

    if(!(isset($_SESSION) && $_SESSION['admin'] == 1)){
        include '../logoff/logout.php';
    }

?>