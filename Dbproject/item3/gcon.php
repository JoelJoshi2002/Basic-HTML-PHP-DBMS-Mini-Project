<?php

$servername = "localhost";

$username="root";

$passsword ="";

$database_name = "invm";

$conn = mysqli_connect($servername,$username,$passsword,$database_name);

if(!$conn)
{
    die("connection Failed: ".mysqli_connect_error());

}

if(isset($_POST['save']))
{

    $gdate = $_POST['gdate'];
    $gitem = $_POST['gitem'];
    $gquantity = $_POST['gquantity'];

    $sql_query = "INSERT INTO guide (gdate,gitem,gquantity) VALUES ('$gdate','$gitem','$gquantity')";

    if (mysqli_query($conn,$sql_query))
    {
        echo "NEW DETAILS ENTERD SUCESSFULLY";

    }

    else
    {
        echo "error: ". $sql . "" . mysqli_error($conn);

    }

    mysqli_close($conn);
    
    header("location:guides.html");
}
?>