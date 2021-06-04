
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../../css/style.css">
      <link type = "img/png" rel = "shortcut icon" href="../../icon_ems.png">
      <title>Home</title>
   </head>
   <body   class = "admin-dboard">
  
      
   <header class = "header-default" style="position: asolute">
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
   <h2> UPDATE FORM </h2> 
      <?php
          
          $conn = mysqli_connect( "localhost","root","","ems",) or die("Connection failed") ;

          $C_id = $_GET['edit'];
          $sql = "SELECT * FROM course WHERE id = {$C_id} ";
          $result = mysqli_query($conn,$sql) or die("Query failed");

          if(mysqli_num_rows($result) > 0){  
              while($row = mysqli_fetch_assoc($result)){   
      ?>
       
   <form name = "Insert_Form" method = "post" action = "actions.php">

         <p>
            <label for = "Course Name">Course Name:</label>
         </p>
            <input type = "hidden" name = "CourseID" id = "id"  value="<?php echo $row['id'] ?> "/>
            <input type = "text" name = "CourseName" id = "name" value="<?php echo $row['name'] ?>"/>
         <p>
            <label for = "Semester">Semester:</label>
         </p>
            <input type = "text" name = "Semester" id = "semester"  value="<?php echo $row['semester']; ?>"/>
         <p>
            <label for = "Status">Status:</label>
         </p>
            <select id    = "status" name = "Status" autofocus value = "<?php echo $row['status']; ?>">
               <option value = "Active">Active</option>
               <option value = "Not Active">Not Active</option>
            </select>
            <br>
            <input type = "submit" name = "Submit" id = "Submit" value = "Update"/>
         <p>&nbsp</p>

      </form>
      <?php
              }
          }
      ?>
      



   </div>
   </div>
</body>
<footer>
      <div class = "btm-footer">
         &copy All rights reserved
      </div>
   </footer>
</html>


