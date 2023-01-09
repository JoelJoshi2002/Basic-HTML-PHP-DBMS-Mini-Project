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

    $rdate = $_POST['rdate'];
    $ritem = $_POST['ritem'];
    $rquantity = $_POST['rquantity'];

    $sql_query = "INSERT INTO record (rdate,ritem,rquantity) VALUES ('$rdate','$ritem','$rquantity')";

    if (mysqli_query($conn,$sql_query))
    {
        echo "NEW DATA ADDED...";

    }

    else
    {
        echo "error: ". $sql . "" . mysqli_error($conn);

    }

    mysqli_close($conn);

    header("location:recordbook.html");
}
?>