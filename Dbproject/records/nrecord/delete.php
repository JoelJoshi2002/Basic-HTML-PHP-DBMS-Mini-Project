<?php   
 include 'connection.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `need` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:nrecord.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  