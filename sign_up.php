<?php

include ('connection.php');


    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $sql = "INSERT INTO `first`(`First_Name`, `Last_Name`, `Email`, `Password`) VALUES ('$First_Name','$Last_Name','$Email','$Password')";

    $result = mysqli_query($con, $sql);

    if($result){

        header('location:table.php');
     }
     else{
        echo "failed" ;
     }





?>