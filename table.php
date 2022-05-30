
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Table</title>

<link rel="stylesheet" href="css/bootstrap.min">
<link rel="stylesheet" href="css/bootstrap-grid">
<link rel="stylesheet" href="css/bootstrap-grid.min">
<style>
    body{
        background:url("A1.jpg");
        background-size: cover;
    
    }
</style>
    
</head>
<body>
    <div class="container-lg my-5 fw-bolder " >
   <div class="row">
       <div class="col-2-sm">
           <div class="col-8-sm ">
           <table class="table">
        <thead class="thead-light">
            <tr class="text-white">
                <th scope="col" > S/N </th>
                <th scope="col" > First Name </th>
                <th scope="col" > Last Name </th>
                <th scope="col" > Email </th>
                <th scope="col" > Password </th>
                <th scope="col" > Action </th>
            </tr>
        </thead>
        <tbody class="text-white" >
<?php 


include ('connection.php');

$i = 0;


 $sql= "SELECT * FROM `first` ";

$result= mysqli_query($con,$sql);  
if($result){
    while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
         $First_Name = $row['First_Name'];
         $Last_Name = $row['Last_Name'];
        $Email = $row['Email'];
        $Password = $row['Password'];
        $i++;

    echo '
        
       <tr>

       <th scope="row" > '.$i.' </th>
                       <td> '.$First_Name.' </td>
                        <td> '.$Last_Name.' </td>
                        <td> '.$Email.'  </td>
                    <td> '.$Password.'  </td>
                    <td>   <a href="update.php? updateid= '.$id.' " class="btn btn-outline-primary border-2 "> Update </a>  
                            <a href="delete.php? deleteid= '.$id.' " class="btn btn-outline-danger border-2 " onclick= confirm(echo "Are you sure you want to delete this user?") > Delete </a>  </td>
        </tr>
    ';

}

}

?>
         
        </tbody>
        

    </table>

           </div>
           <div class="col-2-sm">

           </div>


       </div>

   </div>
   </div>
  <div class="row">
  <div class="col-2-sm"> </div>

  <div class="col-8-sm mx-5 " > <a href="index.php" class="btn btn-primary border-2 " > Login </a>  </div>

  <div class="col-2-sm"> </div>



<script>
   function confirm ('Are you sure you want to delete this user?');

//     function del() {
//  confirm('welcome');
// }
</script>
  
</body>




</html>

