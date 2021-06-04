<?php

      session_start();
      include 'C:\xampp\htdocs\webengineering-Joel\src\db.php';

      
      $name = '';
      $semester = '';
      $status = '';

      if(isset($_GET['delete']))
      {
          $id = $_GET['delete'];
          $conn->query("DELETE FROM course WHERE id=$id") or die($conn->error());

          $_SESSION['message'] = "The Course Has been deleted!";
          $_SESSION['msg_type'] = "Deleted";

          header("location: UniversityCourses.php");
      }

    if($conn && !empty($_POST))
    {
         $id=$_POST['CourseID'];
         $name=$_POST['CourseName'];
         $semester=$_POST['Semester'];
         $status=$_POST['Status'];

         $sql = "UPDATE course SET name = '{$name}', semester = '{$semester}', status = '{$status}' WHERE id = {$id}";
         $result = mysqli_query($conn, $sql) or die("query failed");
 
         header("location: UniversityCourses.php");
    }

    

?>