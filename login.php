<?php
session_start();
include"Mydb.php"; ?>
<?php
$usernameOfPerson = 'username' ;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $login_email = $_POST["email"];
    $login_pass = $_POST["password"];

    // Encrypting the password provided by the user
    $hash = "$2a$10$";
    $string = "udsmstudenttalkinghere";
    $hashString = $hash . $string;
    $login_pass = crypt($login_pass , $hashString);

    // $login_pass = password_hash($login_pass,PASSWORD_BCRYPT);

  //Fetching the email entered by user from the Db
    $query = " SELECT email , username FROM user WHERE email='$login_email' ";
    $email_results = mysqli_query($connection , $query);
    $email_row = mysqli_fetch_assoc($email_results);

     //Checking if the email fetched exists 
    if($email_row){

        //Fetching the password from the Db
        $username = $email_row['username'];
        $email1 = $email_row['email'];
        $query = "SELECT password,id FROM user WHERE password='$login_pass'";
        $pass_results = mysqli_query($connection , $query);
        $pass_row = mysqli_fetch_assoc($pass_results);

        //Checking if the entered password matches the one in the Db
        if($pass_row){
           
            $_SESSION["id"] = $pass_row["id"];
            $_SESSION["username"] = $username ;
            $_SESSION["email"]  = $email1 ;
            
        header("Location:welcome.php");
        
          }else{
            
            
            echo "<h1 style=\" color:white;\">". "Password is wrong". "</h1>";
        
        
          }
   
    }else{
        echo "<h1 style=\" color:white;\">". "User does not exist" ."</h1>";
    }
 
  
}

?>
<!DOCTYPE html>
<html>
<head>
<title>JIDAMVA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  
  </head>
 <body style="font-size: 12px; background-color:black;">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:maroon;">
    <div class="container-fluid">
    <li class="nav-link ms-lg-4">
            <a class="nav-link active" id="item" href="profile.php">HOME</a>
          </li>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         <li class="nav-item ms-lg-4">
            <a class="nav-link active" id="item" href="register.php">REGISTER</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link active " id="item" href="login.php">COURSE</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link active " id="item" href="../WEB-FINAL-PROJECT/PeterJidamva65/index.html">ABOUT ME</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link active " id="item" href="./driftCV/MY CV.pdf">CV</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading" style="color: white;">login</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   </div>
    <form id="Login" method="post" action="">
    <div class="form-group">
       <input type="email" class="form-control w-25" id="email" placeholder="Email Address" name="email" required >
       </div>
        <div class="form-group">
       <input type="password" class="form-control w-25" id="password" placeholder="Password" name="password" required>
      </div>
    </div>
    <button type="submit" class="btn btn-advanced" style="background-color:maroon; color:aliceblue;" >Login</button>
   </form>
    </div>
</div></div></div>
</body>
</html>
