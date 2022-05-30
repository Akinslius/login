<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>

    <link rel="stylesheet" href="css/all.min.css">


    <link rel="stylesheet" href="styles.css" >

    <!-- <style>
    html,body{
        background-image:url("A1.jpg");
        background-size: cover;
    
      
    }
    
</style> -->

</head>
<body>
    <form  action="sign_up.php" method="post">
        <div class="segment">
          <h1>Registration Page</h1>
        </div>

        <label>
            <input type="text" placeholder="First Name" name="First_Name" required >
          </label>
          <label>
            <input type="text" placeholder="Last Name" name="Last_Name" required >
          </label>
        <label>
          <input type="text" placeholder="Email Address" name="Email" required >
        </label>
        <label>
          <input type="password" placeholder="Password" name="Password" required   >
        </label>

        <button class="red" type="submit">  <span class="fa-solid fa-lock" > Register </span> </button> <br>

  
        <div class="fp">
          <a href="index.php"> <span> <h3>Already have an Account?</h3> </span> </a>
        </div>
       
  
        
      </form>
</body>
</html>

