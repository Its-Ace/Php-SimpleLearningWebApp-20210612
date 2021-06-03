<?php
    //Returns sqli connection if we have successful connection
    require_once("connection_test.php");
    //Session info if any is already exist
    require_once("redirection.php");

    global $conn;
    global $row;
    
    if(test_connection())
    {
        $conn = test_connection();   
    }
    $validation_masg = '';

    if (isset($_POST['logon']) && !empty($_POST['user_name']) && !empty($_POST['user_password'])) 
    {
        //Converting into html entities
        $username = htmlentities($_POST['user_name']);
        $password = htmlentities($_POST['user_password']);
        
        //Query
        $query1_result = mysqli_query($conn,"SELECT * FROM admin WHERE sap = '$username'" );
        $query2_result = mysqli_query($conn,"SELECT * FROM admin WHERE password = '$password'" );
        //count for getting admins data
        $Admin_check_name = mysqli_num_rows($query1_result);
        $Admin_check_password = mysqli_num_rows($query2_result);
       
        //Query 
        $student_result_name = mysqli_query($conn,"SELECT * FROM students WHERE sap = '$username'" );
        $student_result_password =  mysqli_query($conn,"SELECT * FROM students WHERE password = '$password'" );
        //Counts for getting students data
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
            header("Location: student/dashboard.php");
        }
        else if ($Admin_check_name == 1 && $Admin_check_password >= 1) 
        {   
            $row = mysqli_fetch_array($query1_result,MYSQLI_ASSOC);
            $_SESSION["user_id"] = $row['sap'];
            $_SESSION['user_name'] = true;
            $_SESSION['user_type'] = 'Admin';
            $_SESSION['active_time'] = time();
            header("location: admin/dashboard.php");
     
        }
        else 
        {
            $validation_masg = "Fill in valid values.";
        }
     
         
    }
    elseif(isset($_POST['logon']))
    {
        //This means either form isset or fields are not set
        $validation_masg = "Some fields might not be filled.";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type = "img/png" rel = "shortcut icon" href="favicon.ico.png">
    <link rel="stylesheet" href="css/style.css">
    <script src="script/jquery-3.6.0.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <title>Log on</title>
</head>


<body id = "main">
    <header class = "header-default">
        <nav class="nav-main">
            <div class="brand">
                <img src="./img/default.png" alt="" style="width: 100px; height: 100px; padding-top: 10px;margin-bottom: 11px;">
            </div>   
            <ul class="nav-contained">
                <li id="home-bar">
                    <a href = "./home.php">Home</a>
                </li>
                <li>
                    <a href = "./Howto.php">How to use?</a>
                </li>
            </ul>
        </nav>
    </header> 
    <div class="flex-page">

        <div class="left">

            <h1>Riphah International<br> University <br></h1>
            <img src = "./img/logo.png" alt="logo">
        </div>

    
        <div class="logon-submission">

            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                
                <div class="top">
                    <h2>Provide your credentials</h2>
                </div>
                <?php
                    if($validation_masg != ''){
                        echo'   
                        <div>
                            <div class="card-box-red-warning" style = "padding-left: 10px; margin-top: 10px;">'.
                                $validation_masg.
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
<script type = 'text/javascript'>    
    $(document).ready(function(){
        $('#main').fadeIn(2000);
    });
</script>