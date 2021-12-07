<?php

include_once './../db/connection.php';

    if(session_status() == 2 && $_SESSION['admin'] == 1){
        include '../logoff/logout.php';
    }

?>