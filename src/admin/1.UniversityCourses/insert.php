<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "course";



$con = mysqli_connect($server, $username, $password, $dbname);

   if(isset($_POST['submit'])){
   if(!empty($_POST['id'] && !empty($_POST['name'] && !empty($_POST['sem'] && !empty($_POST['status']))
   {
      $id = $_POST['id'];
      $name = $_POST['name'];
      $sem = $_POST['sem'];
      $status = $_POST['status'];
    
      $query = "INSERT INTO course (id,name,semester,status) 
        VALUES ('$id', '$name','$sem','$status')";

      $run = mysqli_query($con,$query) or die(mysql_error());

      if($run)
      {
         echo'Data Inserted';
      }
      else
      {
         echo'Data Not Inserted';
      }
   }
   else
   {
      echo'all feilds required';
   }
}

header("refresh:1; url=AddCourses.html");

?>
  
