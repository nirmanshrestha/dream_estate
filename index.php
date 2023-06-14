<?php require './connection.php' ;


if(session_start()){
  header('location: ./pages/home.php');
  exit;
}
if(isset($_POST["submit"])) {
  
 
  $email = mysqli_real_escape_string($connect_db, $_POST['email']);
  $password =  $_POST['password'];

  $qry = "select id, email, username, type, password from customer where email= '$email' ;";
$result = $connect_db->query($qry);

  if($result->num_rows == 1){
    echo 'true';
   $row = $result->fetch_assoc();
    
   $hashedPassword = $row['password'];
    if($password ==  $hashedPassword){
      echo 'nns';
      session_start();

      $_SESSION['u_id'] = $row['id'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['type'] = $row['type'];
      
      header('location: ./pages/home.php');
      exit;
     
    }
    else{
      echo "incorrect password";
    }
  }
  else{
    echo "mms";
  }
;
 

  
 


}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dream Estate - Login</title>
  <style>
    /* Add your custom CSS styles here */
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      margin: 0;
      padding: 0;
    }
    
    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      margin-top: 100px;
    }
    
    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 5px;
    }
    
    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    .form-group .btn-submit {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      background-color: #4caf50;
      border: none;
      color: #fff;
      cursor: pointer;
      border-radius: 4px;
    }
    
    .form-group .btn-submit:hover {
      background-color: #45a049;
    }
    
    .signup-link {
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Dream Estate - Login</h2>
    <form method="POST" action="index.php">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Log In" class="btn-submit" name="submit">
      </div>
    </form>
    <div class="signup-link">
      Don't have an account? <a href="signup.php">Sign up</a>
    </div>
  </div>
</body>
</html>
