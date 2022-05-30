<?php
include ('connection.php');



$id = $_GET['updateid'];


$sql = "SELECT * FROM `first` WHERE id = $id";
$result = mysqli_query ($con, $sql);
$row= mysqli_fetch_assoc($result);
    
    
    $First_Name = $row['First_Name'];
    $Last_Name = $row['Last_Name'];
    $Email = $row['Email'];
    $Password = $row['Password'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/bootstrap.min">
    <link rel="stylesheet" href="css/bootstrap-grid">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/all.min.css">
    </head>
    <body>
    
     <form action="updatedata.php" method="post">
        <div class="segment">
          <h1>Update Page</h1>
        </div>
            <input type="hidden" name="id" value= "<?php  echo "$id"; ?>">
        <label>
            <input type="text"  name="First_Name" value=" <?php  echo "$First_Name"; ?> " required >
          </label>
          <label>
            <input type="text" name="Last_Name" value=" <?php  echo $Last_Name; ?> "  required >
          </label>
        <label>
          <input type="text" name="Email" value=" <?php  echo $Email; ?> "  required >
        </label>
        <label>
          <input type="password" name="Password" value=" <?php  echo $Password; ?> "  required   >
        </label>

        <button class="red" type="submit">  <span class="fa-solid fa-lock" > Update </span> </button> <br>
  
        <div class="fp">
          <a href="index.php"> <span> <h3>Login</h3> </span> </a>
        </div>
       
   </form>
</body>
 </html>

