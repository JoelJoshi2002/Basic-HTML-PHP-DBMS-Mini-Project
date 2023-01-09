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

    $odate = $_POST['odate'];
    $oitem = $_POST['oitem'];
    $oquantity = $_POST['oquantity'];

    $sql_query = "INSERT INTO other (odate,oitem,oquantity) VALUES ('$odate','$oitem','$oquantity')";

    if (mysqli_query($conn,$sql_query))
    {
        echo "NEW DETAILS ENTERD SUCESSFULLY";

    }

    else
    {
        echo "error: ". $sql . "" . mysqli_error($conn);

    }

    mysqli_close($conn);
    
    header("location:other.html");
}
?>