<?php
include ('connection.php');
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = " DELETE FROM `first` WHERE id = $id  ";

    $result = mysqli_query($con, $sql);

    if($result){
        // echo "deleted";
        header('location:table.php');
    }
    else{
        echo "failed to delete";
    }
}






?>