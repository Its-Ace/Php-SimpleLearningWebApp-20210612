<?php




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Accounts Settings</title>
</head>
<body id = "accounts_settings">

    <header class="header-default">
        <div class="top-items">
            <img src = "../img/logo.png" style="position: relative; margin-left: 30px; margin-top: -15px; width: 60px; height: 60px; padding-top: 10px" alt = 'logo'>
            <label>Accounts Settings</label>
            <div class="users-data">
                <div class = "content">
                    <strong><?php $_SESSION["active_user"]?></strong>
                    <a href="./accounts_settings.php">Account settings</a>
                </div>
                <div class="user-info-summary">
                    <img src = "../img/blank-profile.png" style="width: 50px ; height: 50px; border: solid 6px rgba(255, 255, 255, 0.26); border-radius: 50%;" alt = "N/A"><br>
                   
                    <div class="dropdown">
                        <button onclick="openDropdown()" class="fas fa-angle-down"></button>
                            <div id="dropdown-menu-id" class="dropdown-content">
                                <?php 
                                    echo '<a href="../logout.php?REF=logout">Log-out</a>';
                                ?> 
                                <a href="#">Profile</a>
                            </div>
                    </div> 
               
                </div>
                
            </div>
        </div>
        
    </header>

    <div class="flex-box">
        <div class="left-menu">
        
        
        </div>
        <div class="right-box">
        
        
        </div>    
    
    </div>
    
</body>
</html>