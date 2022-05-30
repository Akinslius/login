<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>

    <link rel="stylesheet" href="css/bootstrap.min">

    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">

    <style>
        body{
            background: url("A9.jpg");
            
        }
        h1{
            color: white;
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        span{
            font-style:italic;
            color:red;
            margin-left: 30px;
        }
        #sec{
            margin-left: 10px;
        }
    </style>

</head>
<body>
    <div class="container-lg my-5 ">
        <div class="row justify-content-center">
            <div class="col">
                <div class="text-light p-5 fw-bolder">
                    <h1>
                        Welcome <span> <?php  echo $_SESSION['First'] ;   ?>  <span id="sec"> <?php  echo $_SESSION['Last'] ;   ?> </span> 
                    </h1> 
                    <div class="col mx-4 my-5  " > <button class="btn btn-danger " onclick = "confirm('Are you sure you want to logout this session?')"> <a href="index.php" class="text-decoration-none fw-bolder"> Log out </a> </button>  </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>