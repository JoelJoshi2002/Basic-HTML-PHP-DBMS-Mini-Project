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

    $bdate = $_POST['bdate'];
    $bitem = $_POST['bitem'];
    $bquantity = $_POST['bquantity'];

    $sql_query = "INSERT INTO book (bdate,bitem,bquantity)
     VALUES ('$bdate','$bitem','$bquantity')";

    if (mysqli_query($conn,$sql_query))
    {
        echo "NEW DATA ADDED...";

    }

    else
    {
        echo "error: ". $sql . "" . mysqli_error($conn);

    }

    mysqli_close($conn);

    header("location:book.html");
}
?>