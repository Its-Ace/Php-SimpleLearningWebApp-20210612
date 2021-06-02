<?php

   function get_courses()
   {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ems";

    $conn = new mysqli( $servername, $username,$password,$dbname);

    if(!$conn){
      die("Connection failed: " .mysqli_connect_error());
    }

    $query="select * from course";
    $data= mysqli_query($conn,$query);

    $courses=array();

    while($object=mysqli_fetch_object($data))
    {
       $courses[]=$object;
    }

    mysqli_close($conn);
     return $courses;
  }

  function get_table()
  {
      $table_str='';
      $courses=get_courses();
      $i=1;
      foreach($courses as $Course)
      { 
          
          $table_str.=' '.$Course->name;
         

      }
     
      return $table_str;
  }
?>

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
            <a href="#home"><i class="active-page fa fa-fw fa-home"></i></a>
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
            <?php echo  get_table(); ?>
            
            <div class="card-box" style="width: 80%;">
                <div class="table-course">
               
                    <!-- <table id = "courses-items">
                        <tr>
                        <th>Semester no</th>
                        </tr>
                        <tr>
                            <td>Course name</td>
                            <td>&nbsp;</td>
                            <td><a href = "details.html"><button>details</button></a></td>
                            <td><a><button name = "update">Update</button></a></td>
                            <td><a><button name = "delete">Delete</button></a></td>
                        </tr>
                        <tr>
                            <td>Course name</td>
                            <td>&nbsp;</td>
                            <td><a href = "details.html"><button>details</button></a></td>
                            <td><a ><button>Update</button></a></td>
                            <td><a ><button>Delete</button></a></td>
                        </tr> -->
                    </table>
                </div>
            </div>
            
            <div>
                <div class="signin-button">
                    <a style="text-decoration: none;" href="../1.UniversityCourses/AddCourses.php">Add Course</a>
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