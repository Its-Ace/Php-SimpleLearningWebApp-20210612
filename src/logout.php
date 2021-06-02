<?php   
     //to ensure you are using same session
     if(isset($_GET["REF"])&&$_GET["REF"] == "logout")
     {
        session_destroy();
     }

     //destroy the session
     header("Location: logon.php"); 
?>
