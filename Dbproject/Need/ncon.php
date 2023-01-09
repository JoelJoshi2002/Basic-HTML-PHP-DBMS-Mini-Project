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

    $ndate = $_POST['ndate'];
    $nitem = $_POST['nitem'];
    $nquantity = $_POST['nquantity'];

    $sql_query = "INSERT INTO need (ndate,nitem,nquantity)
     VALUES ('$ndate','$nitem','$nquantity')";

    if (mysqli_query($conn,$sql_query))
    {
        echo "NEW DATA ADDED...";

    }

    else
    {
        echo "error: ". $sql . "" . mysqli_error($conn);

    }

    mysqli_close($conn);

    header("location:need.html");
}
?>