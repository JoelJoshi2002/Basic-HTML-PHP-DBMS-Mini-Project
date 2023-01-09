<?php   
 include 'connection.php';  
 if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `other` WHERE id = '$id'";  
      $run = mysqli_query($conn,$query);  
      if ($run) {  
           header('location:other.php');  
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  