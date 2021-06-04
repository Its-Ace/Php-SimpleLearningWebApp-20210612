

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
<body>
    <?php require_once 'actions.php';
          
     ?>

    <header class = "header-default">
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
        </div>
    </header>
    <div>
        <div class="sidebar">
            <a href="UniversityCourses.php"><i class="active-page fa fa-fw fa-home"></i></a>
            <a href="#services"><i class="fa fa-fw fa-wrench"></i></a>
            <a href="#clients"><i class="fa fa-fw fa-user"></i></a>
            <a href="#contact"><i class="fa fa-fw fa-envelope"></i></a>
        </div>
        <div class="card-box">
            <div class="program-view">
                <div class="dropdown">
                    <button class="dropbtn">Select Program</button>
                    <div class="dropdown-content">
                      <a href="#">Link 1</a>
                      <a href="#">Link 2</a>
                      <a href="#">Link 3</a>
                    </div>
                </div>
                <input type="text" placeholder="Search course">
            </div>
           
            <div>
                <div class="signin-button">
                    <a style="text-decoration: none;" href="../1.UniversityCourses/AddCourses.php">Add Course</a>
                </div>
            </div>


            <?php  
                        include 'C:\xampp\htdocs\webengineering-Joel\src\db.php';
                        $sql = $conn->query("select * from course");
                        
                        function pre_r($array)
                        {
                            echo '<pre>';
                            print_r($array);
                            echo '</pre>';
                        }
                           ?> 

            <?php if(isset($_SESSION['message'])): ?> 
                             
                <div class="alertalert-<?=$_SESSION['msg_type']?>"> 
 
            <?php 
                     echo $_SESSION['message'];
                     unset($_SESSION['message']);     
            ?>
            </div>
            <?php endif ?>
             <div class="card-box" style="width: 80%;">
                <div class="table-course">
                
                     <table id = "courses-items" >
                        
                              <tr>
                                  <th>ID</th>
                                  <th>Course Name</th>
                                  <th>Semester</th>
                                  <th>Status</th>
                                  <th>Actions</th>
                              </tr>         
                          <?php
                              while($row = $sql->fetch_assoc()): ?>
                          <tr>
                              <td width="30"><?php echo $row['id'] ?></td>
                              <td><?php echo $row['name'] ?></td>
                              <td><?php echo $row['semester'] ?></td>
                              <td><?php echo $row['status'] ?></td>
                              <td width="220" >
                                  <a href="Update.php?edit=<?php echo $row["id"]; ?>"
                                     class="button">Edit</a>
                                  <a href="actions.php?delete=<?php echo $row['id']; ?>"
                                     class="button">Delete</a>
                              </td>
                          </tr>
                          <?php endwhile; ?>
                          
                    </table>
                </div>
            </div>
   </div>
                   </div>
    
    </div>
    
</body>
<footer>
    <div class="btm-footer">
        All rights reserved
    </div>
</footer>
</html>
<script>
    function openNav() {
      document.getElementById("mySidenav").style.display = "block";
    }
    function closeNav() {
      document.getElementById("mySidenav").style.display = "none";
    }
</script>