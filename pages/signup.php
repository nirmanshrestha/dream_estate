<?php
require '../connection.php';

if(isset($_POST["registration"])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];

    $qry = "INSERT INTO customer VALUES ('','$name','$username','$email','$password','$address','$mobile','$dob','active');";



    if($connect_db->query($qry)){
        echo '<script> alert("successfull") </script>';
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        input,label{
            width: 80%;
            padding: 0 5px;
        }
        label{
            text-align: left;
        }
        .user-name, .security {
            width: 80%;
        }
        form {
            max-width: fit-content;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <main class="container mx-auto mt-3">


        <form action="signup.php" method="POST" class=" mx-auto border">

            <div  class=" d-flex flex-column  align-items-center" style="width: fit-content;">
                <div class="user-name ">
                    
                    <input type="text" name="name">
                    
                    <input type="text" name="username">
                  
                    <input type="text" name="email">
          
                    <input type="password" name="password">
                    <input type="text" name="address" >
                    <input type="text" name="mobile" >
                    <input type="date" name="dob" >
                </div>

                    
           
            </div>
            <input type="submit" name="registration" value="Sign up" class="btn btn-primary">
        </form>
        </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>