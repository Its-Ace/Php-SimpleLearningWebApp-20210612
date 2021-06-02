<?php
    session_start();
    //Config tab
    //Session active time is one minute
    if(empty($_SESSION)){
        header("./logon.php");
    }
    if (isset($_SESSION['active_time']) && (time() - $_SESSION['active_time'] > (60))) {
        session_unset();     // unset $_SESSION   
        session_destroy();   // destroy session data  
    }
?>