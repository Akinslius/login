<?php

include ('connection.php');


session_start();

$Email = ($_POST['Email']);
$Password = ($_POST['Password']);

// $sql= " SELECT * FROM 'first' where 'Email'='$Email' AND 'Password'='$Password' ";

$sql = "select * from first where Email='".$Email."' and Password = '".$Password."'";

// $result= $con -> query ($sql);

$result = mysqli_query($con, $sql);



if($result -> num_rows > 0 ){
    header('location: welcome.php');
}
else{
    echo "Incorrect Email or Password!!!";
}

if($result){
    $row = mysqli_fetch_assoc($result);

   $_SESSION['First']=$row['First_Name'];
   $_SESSION['Last']=$row['Last_Name'];
}

// if($result){
//     $row = mysqli_fetch_assoc($result);
//     echo $row['First_Name'];
// }
// else{
//     echo "failed";
// }
// echo $row['Last_Name'];




// if(isset($_POST['submit'])) {
// $Email = mysqli_real_escape_string($con,$_POST['Email']);
// $Password = mysqli_real_escape_string($con,$_POST['Password']);



// $Email = $_POST ['Email'] ;
// $Password = $_POST ['Password'] ;

// $sql= "INSERT INTO `first`(`Email`, `Password`) VALUES ('[value-1]','[value-2]','[value-3]') ";

// $sql=" SELECT * FROM `first` WHERE 'Email'== $Email AND 'Password'== $Password " ;

//Query
// $sql = "select * from first where Email='".$Email."' and Password = '".$Password."'";


// $q = $con->query($sql);
// if($q->num_rows==1)
// {
// $res = $q->fetch_assoc();
// $_SESSION['id']=$res['id'];
// echo "pass" ;

// //    header("Location:index.php"); 
// //    exit; 
//  }
//  else{
//     echo "Fail";


// //   $error="<div class=\"alert alert-block alert-danger fade in\">
// //   <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\"><i class=\"icon-remove\"></i></button>
// //   <strong>Sorry!</strong> Incorrect Username or Password.</div>";
 
//  }

// }







// $result= mysqli_fetch_assoc($sql);

// if($result !==1){
//     echo "pass";
    
// }
// else{
//     echo "failed";
// }

?>