<?php
    require_once("connection_test.php");
    //Returns sqli connection if we have successful connection
    global $conn;
    global $row;
    if(test_connection()){
        $conn = test_connection();
       
    }
    
    session_start();
    
    //Config tab
    if (isset($_SESSION['active_time']) && (time() - $_SESSION['active_time'] > (60))) {
        session_unset();     // unset $_SESSION   
        session_destroy();   // destroy session data  
    }
    if(!empty($_SESSION) && isset($_SESSION['user_type']))
    {   
        if($_SESSION['user_type'] == 'Admin'){
            header("Location: admin/dashboard.html");
        }
        else if( $_SESSION['user_type'] == 'Student'){
            header("Location: student/dashboard.html");
        }
           
    }     

    $not_validated = '';
    if (isset($_POST['logon']) && !empty($_POST['user_name']) && !empty($_POST['user_password'])) 
    {
        $username = htmlentities($_POST['user_name']);
        $password = htmlentities($_POST['user_password']);
        $query1_result = mysqli_query($conn,"SELECT * FROM admin WHERE sap = '$username'" );
        $query2_result = mysqli_query($conn,"SELECT * FROM admin WHERE password = '$password'" );
        //count
        $Admin_check_name = mysqli_num_rows($query1_result);
        $Admin_check_password = mysqli_num_rows($query2_result);
       
        $student_result_name = mysqli_query($conn,"SELECT * FROM students WHERE sap = '$username'" );
        $student_result_password =  mysqli_query($conn,"SELECT * FROM students WHERE password = '$password'" );
        
        //count
        $student_check_name = mysqli_num_rows($student_result_name);
        $student_check_password = mysqli_num_rows($student_result_password);
       
        if($student_check_name == 1 && $student_check_password >= 1)
        {
            $row = mysqli_fetch_array($student_result_name,MYSQLI_ASSOC);
            //This means the login request is from student 
            $_SESSION['user_id'] = $row['sap'];
            $_SESSION['user_name'] = $row['name'];
            $_SESSION['user_type'] = 'Student';
            $_SESSION['active_time'] = time();
         
        }
        else if ($Admin_check_name == 1 && $Admin_check_password >= 1) 
        {   

            $row = mysqli_fetch_array($query1_result,MYSQLI_ASSOC);
            
            $_SESSION['user_name'] = true;
            $_SESSION['user_type'] = 'Admin';
            $_SESSION['active_time'] = time();
     
        }
        else 
        {
            $not_validated = "Fill in valid values.";
        }
     
         
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Log on</title>
</head>


<body>
<header class = "header-default">
        <nav class="nav-main">
            <div class="brand">
                <img class="logo" src="icon_ems.png" alt="EMS">
            </div>
            <ul class="nav-contained">
                <li>Dashboard</li>
            </ul>
            <div class="users-data">
                <div class = "content">
                    <strong>Name</strong>
                    <a href="account.html">Account settings</a>
                </div>
                <img src = "img/blank-profile.png" style="width: 50px ; height: 50px; border: solid 6px rgba(255, 255, 255, 0.26); border-radius: 50%;" alt = "N/A"><br>
            </div>
        </nav>  
        </div>
    </header> 
    <div class="flex-page">

        <div class="left">

            <h1>Riphah International University <br></h1>
            <img src = "./img/riphah.png" alt="logo">
        </div>

    
        <div class="logon-submission">

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                
                <div class="top">
                    <h2>Provide your credentials</h2>
                </div>
                <?php
                    if($not_validated != ''){
                        echo'   
                        <div>
                            <div class="card-box-red-warning" style = "padding-left: 10px; margin-top: 10px;">'.
                                $not_validated .
                            "</div>
                        </div>";
                    }
                ?>
                <div class="bottom">
                    <label for="user_name">
                        Username
                    </label>
                    <input name="user_name" class = "input-form" type = "text" id="user_name" placeholder="e.g 2165,2568">
                    <label for="user_password">
                        Password
                    </label>
                    <input name = "user_password"class = "input-form" type = "password" id="user_password" placeholder="Password"><br>
                    <button class = "button button2" type = "submit" name = "logon" > Logon </button><br> 
                </div>
            </form>

        </div>

    </div>

</body>
<footer>

    <div class="btm-footer">
        &copy All rights reserved
    <div>

</footer>

</html>