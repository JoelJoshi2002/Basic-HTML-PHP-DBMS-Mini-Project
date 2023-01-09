<?php   
 include 'connection.php';  
 $query = "select * from electronics";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Delete Data From Database in PHP</title>  
      <link rel="stylesheet" type="text/css" href="erecord.css">  
 </head>  
 <body>  
 <body>

<nav class="navbar"> 
    <div class="logo">Inventory Management System</div>
    <ul class="nav-links"> 
      <div class="menu">
        <li><a href="/record/record.html">Record</a></li>

        <li><a href="/additem/additems.html" >Add Items</a></li>

        <li><a href="/Need/need.HTML">Items Needed</a></li>
      </div>
    </ul> 
  </nav>
  <main class="Heading"> Electronics Items </main>
<main>
 <header>
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
           <th>Sl No</th>  
           <th>Date: </th>  
           <th>Item: </th>  
           <th>Quantity: </th>  
             
           <th>Operation</th>  
      </tr>  
      <?php   
      $i=1;  
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                         
                               <td>".$i."</td>  
                               <td>".$result['edate']."</td>  
                               <td>".$result['eitem']."</td>  
                               <td>".$result['equantity']."</td>  
                               <td><a href='delete.php?id=".$result['id']."' id='btn'>Delete</a></td>  
                          </tr>  
                     "; 
                     $i++; 
                }  
           }  
      ?>  
 </table>  
 </header>  

 </body>  
 </html>