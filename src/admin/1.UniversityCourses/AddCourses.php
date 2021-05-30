<?php

   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "ems";

   $conn = new mysqli( $servername, $username,$password,$dbname);

   if(!$conn){
      die("Connection failed: " .mysqli_connect_error());
   }

   if($conn && !empty($_POST))
   {
      $id=$_POST['CourseID'];
      $name=$_POST['CourseName'];
      $semester=$_POST['Semester'];
      $status=$_POST['Status'];

      $sql = "insert into course(id,name,semester,status) value ('$id','$name','$semester','$status')";
      mysqli_query($conn, $sql);
   }
?>

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
      <a href="#home"><i class="active-page fa fa-fw fa-home"></i></a>
      <a href="#services"><i class="fa fa-fw fa-wrench"></i></a>
      <a href="#clients"><i class="fa fa-fw fa-user"></i></a>
      <a href="#contact"><i class="fa fa-fw fa-envelope"></i></a>
   </div>
   <div class="card-box">
      <form method = "post" action = "">
         <p>
            <label for = "Course ID">Course ID: </label>
         </p>
            <input type = "text" name = "CourseID" id = "id">
         <p>
            <label for = "Course Name">Course Name:</label>
         </p>
            <input type = "text" name = "CourseName" id = "name">
         <p>
            <label for = "Semester">Semester:</label>
         </p>
            <input type = "text" name = "Semester" id = "semester">
         <p>
            <label for = "Status">Status:</label>
         </p>
            <select id    = "status" name = "Status">
               <option value = "Active">Active</option>
               <option value = "Not Active">Not Active</option>
            </select>

            <input type = "submit" name = "Submit" id = "Submit" value = "Submit">
         <p>&nbsp</p>

      </form>

   </div>
   </div>
</body>
<footer>
      <div class = "btm-footer">
         &copy All rights reserved
      </div>
   </footer>
</html>


