

<?php
include ('connection.php');

// session_start();

// $_SESSION["id"] = "updateid";

// $a = $_SESSION["id"];




// if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $First_Name = $_POST['First_Name'];
    $Last_Name = $_POST['Last_Name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    
    // $sql = "UPDATE `first` SET First_Name ='$First_Name', Last_Name='$Last_Name', Email='$Email', Password='$Password' WHERE id = $a ";

   $sql =  "UPDATE `first` SET `First_Name`='$First_Name',`Last_Name`='$Last_Name',`Email`='$Email',`Password`='$Password' WHERE `id` = $id";
    $result = mysqli_query($con, $sql);
    
    
    if($result){
        //  echo "Data submited";
        header('location:table.php');
     }
     else{
         echo "Failed";
     }
  


?>