<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Dashboard</title>

</head>

<body class = "admin-dboard">
    <header class="header-default">
        <div class="top-items">
            <img src = "../img/logo.png" style="position: relative; margin-left: 30px; margin-top: -15px; width: 60px; height: 60px; padding-top: 10px" alt = 'logo'>
            <label>Dashboard</label>
            <div class="users-data">
                <div class = "content">
                    <strong>Name</strong>
                    <a href="account.html">Account settings</a>
                </div>
                <div class="user-info-summary">
                    <img src = "../img/blank-profile.png" style="width: 50px ; height: 50px; border: solid 6px rgba(255, 255, 255, 0.26); border-radius: 50%;" alt = "N/A"><br>
                   
                    <div class="dropdown">
                    <i class=""></i>
                        <button onclick="myFunction()" class="fas fa-angle-down"></button>
                            <div id="dropdown-menu-id" class="dropdown-content">
                                <?php 
                                    echo '<a href="../logout.php?REF=logout">Log-out</a>';
                                ?> 
                                <a href="#">Link 2</a>
                                <a href="#">Link 3</a>
                            </div>
                    </div> 
               
                </div>
                
            </div>
        </div>
        
    </header>
    <div class="menu-container fa fa-bars">
    
        <strong>Menu</strong>
       
    </div>

    <div class="flex-around">
        <div class="card-box">
            <a href = "1.universityCourses/UniversityCourses.html">
                <img src = "../img/img-courses.png" alt = "img">
                <div class="internal-container">
                    <h5>University courses</h5>    
                </div>   
            </a>
        </div>
        
        <div class="card-box">
            <a href="2.studentsInformation/studentInformation.html">
                <img src = "../img/student-info.png" alt = "img">
                <div class="internal-container">
                    <h5>Student Information</h5>    
                </div>
                
            </a>
        </div>
        
        <div class="card-box">
            <a href="3.StudentForms/studentforms.html">
                <img src="../img/forms.png" alt="Avatar" style="width:100%; ">
                <div class="internal-container">
                    <h5>Enrollment form</h5>
                </div>
                
            </a>
        </div>     
    </div>  
    
</body>
<footer>
    <div class="btm-footer">
       &copy All rights reserved
    </div>
</footer>
</html>
<script type="text/javascript">

function myFunction() {
  document.getElementById("dropdown-menu-id").classList.toggle("show");
}

//If we have shown the content then if we click on another think then that then it should close
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 
</script>