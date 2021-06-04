<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>University Courses</title>
</head>
<header class="header-default" style="position: relative;">
    <nav class="nav-main">
        <div class="brand">
            <img class="logo" src="../../icon_ems.png" alt="EMS">
        </div>
        <ul class="nav-contained">
            <li>Dashboard</li>
        </ul>
        <div class="users-data">
            <div class = "content">
                <strong>Name</strong>
                <a href="account.html">Account settings</a>
            </div>
            <img src = "../../img/blank-profile.png" style="width: 50px ; height: 50px; border: solid 6px rgba(255, 255, 255, 0.26); border-radius: 50%;" alt = "N/A"><br>
        </div>
    </nav>
</header>
<body>
    <div class="sidebar">
        <a href="courses.php"><i class="active-page fa fa-fw fa-home"></i></a>
        <a href="#services"><i class="fa fa-fw fa-wrench"></i></a>
        <a href="#clients"><i class="fa fa-fw fa-user"></i></a>
        <a href="#contact"><i class="fa fa-fw fa-envelope"></i></a>
    </div>

    

    <div class="card-box" >
   
        <h4>Course details</h4>
       
        <div class="solid-block">
        
         <?php 
            $conn = mysqli_connect( "localhost","root","","ems",) or die("Connection failed") ;

            $C_id = $_GET['detail'];
            $sql = "SELECT * FROM course WHERE id = {$C_id} ";
            $result = mysqli_query($conn,$sql) or die("Query failed");

             if(mysqli_num_rows($result) > 0){  
                   while($row = mysqli_fetch_assoc($result)){   
          ?>
                   <table id = "courses-items">
                        <tr>
                            <th style="text-align:center;">ID</th>
                            <th style="text-align:center;">Course Name</th>
                            <th style="text-align:center;">Semester</th>
                            <th style="text-align:center;">Status</th>
                            <th style="text-align:center;">Actions</th>
                        </tr>   
                        <tr>
                              <td width="30" style="text-align:center;"><?php echo $row['id'] ?></td>
                              <td style="text-align:center;"><?php echo $row['name'] ?></td>
                              <td style="text-align:center;"><?php echo $row['semester'] ?></td>
                              <td style="text-align:center;"><?php echo $row['status'] ?></td>
                              <td width="50" style="text-align:center;" >
                                  <a href="" class="button">Enroll</a>
                              </td>
                    </table>
                    <?php
              }
          }
      ?>
          
        </div>
    </div>
    

    <i class = "icon-info"></i>

</body>
<footer>
    <div class="btm-footer">
        All rights reserved
    </div>
</footer>
</html>