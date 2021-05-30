
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
    //Redirect if session is active
    if(!empty($_SESSION) && isset($_SESSION['user_type']))
    {   
        if($_SESSION['user_type'] == 'Admin'){
            header("Location: admin/dashboard.html");
        }
        else if( $_SESSION['user_type'] == 'Student'){
            header("Location: student/dashboard.html");
        }
        
    }     
?>