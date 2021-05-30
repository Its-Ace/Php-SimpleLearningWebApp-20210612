<?php
$test = 0;
include("connection_test.php");
require_once("./config.php");
test_connection();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="script/jquery-3.6.0.min.js"></script>
    <script src="./script/script.js"></script>
    <link type="img/png" rel="shortcut icon" href="favicon.ico.png">
    <title>Home</title>
</head>

<body>
    <header class="header-default">
        <nav class="nav-main">
            <div class="brand">
                <img src="./img/default.png" alt="" style="width: 100px; height: 100px; padding-top: 10px;margin-bottom: 11px;">
            </div>
            <ul class="nav-contained">
                <li>
                    <a href="./home.php" class="active-page">Home</a>
                </li>
                <li>
                    <a href="./Howto.php">How to use?</a>
                </li>
            </ul>
            <div class="signin-button">
                <a href="./logon.php">
                    <span>Sign in</span>
                </a>
            </div>
        </nav>
    </header>

    <div class="page-main-container">

        <div class="slideshow-container">
        
        <div class="left-main-container">
            <h2>Riphah<br>International University</h2>
            <img src="./img/logo.png" alt="logo">
            <div class="container">
                <p>We are here to solve your problems</p>
                <ul>
                    <li>
                        Point 1
                    </li>
                    <li>
                        Point 2
                    </li>
                </ul>
            </div>

        </div>

    </div>

</body>

<footer>
    <div class="btm-footer">
        &copy All rights reserved.
    </div>
</footer>

</html>