<?php

$servername = "localhost";

$username="root";

$passsword ="";

$database_name = "invm";

$conn = mysqli_connect($servername,$username,$passsword,$database_name);

if(!$conn)
{
    die("connection Failed: " . mysqli_connect_error());

}

if(isset($_POST['save']))
{

    $edate = $_POST['edate'];
    $eitem = $_POST['eitem'];
    $equantity = $_POST['equantity'];

    $sql_query = "INSERT INTO electronics (edate,eitem,equantity)
     VALUES ('$edate','$eitem','$equantity')";

    if (mysqli_query($conn,$sql_query))
    {
        echo "NEW DATA ADDED...";

    }

    else
    {
        echo "error: ". $sql . "" . mysqli_error($conn);

    }

    mysqli_close($conn);

    header("location:electronics.html");

    
}
?>