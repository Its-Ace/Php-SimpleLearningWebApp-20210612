<?php

    require_once("./config.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link type = "img/png" rel = "shortcut icon" href="favicon.ico.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>How to use?</title>
</head>

<body>
    <header class = "header-default">
        <nav class="nav-main">
            <div class="brand">
                <img src="./img/default.png" alt="" style="width: 100px; height: 100px; padding-top: 10px;margin-bottom: 11px;">
            </div>   
            <ul class="nav-contained">
                <li>
                    <a href = "./home.php" >Home</a>
                </li>
                <li>
                    <a href = "./Howto.php" class = "active-page">How to use?</a>
                </li>
            </ul>
            <div class="signin-button">
                <a href="./logon.php">
                    <span>Sign in</span>
                </a>
            </div>
        </nav>
    </header> 

    <div class="card">
        <div class="intro">
            <span class = "fa fa-users sidebar-left"">
                We have two roles
                <ul>
                    <li>
                        Admin
                    </li>
                    <li> 
                        Student
                    </li>
                </ul>
            </span> 
        </div>

        <div class="videos">
            <label>
                Admin
            </label>
            <div class="video-content">
                <iframe width="420" height="315"
                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe> 
            </div>
            <label>
                Student
            </label>
            <div class="video-content">
                <iframe width="420" height="315"
                src="https://www.youtube.com/embed/tgbNymZ7vqY">
                </iframe> 
            </div>
        </div>
    </div>
</body>
<footer>
    <div class="btm-footer">
        &copy All rights reserved
    </div>
</footer>
</html>