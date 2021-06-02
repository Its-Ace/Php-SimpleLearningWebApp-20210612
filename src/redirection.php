
<?php
    session_start();
    

    if(isset($_SESSION['active_time']))
    {
        if(time()-$_SESSION['active_time'] > 60) 
        {
            session_unset();
            session_destroy();
        }
        elseif($_SESSION['user_name'] == 'Student')
        {
            //redirect
            //Session time is resetted
            $_SESSION['active_time'] = time();
            header("Location: ./student/dashboard.php");

        }
        elseif($_SESSION['user_name'] == 'Admin')
        {
            //
            $SESSION["active_time"] = time();
            //redirect
            header("Location: ./admin/dashboard.php");
        }
    }
?>