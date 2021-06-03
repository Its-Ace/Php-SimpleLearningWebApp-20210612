<?php
    session_start();
    if(!isset($_SESSION["user_name"]))
    {
        //make it move to header
        header("Location: ./logout.php");
    }

?>