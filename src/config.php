<?php
//Provide session info 
//if session time exceds expected 
//Display notification
    
    if(time() - $_SESSION['active_time'] > 60 )
    {
        session_unset();
        session_destroy();
        //SCRIPT TO SHOW THE OUTPUT OF THE ALERTBOX
        
    }


?>