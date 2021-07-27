<?php

session_start();
include "Mydb.php"  ?>
<?php


if( $_SERVER["REQUEST_METHOD"] == "POST"){
  
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $firstname = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $lastName = $_POST["lastName"];
    $phone = $_POST["phone"];
    $social = $_POST["social"];
    $hash = "$2a$10$";
    $string = "udsmstudenttalkinghere";
    $hashString = $hash . $string;
    $password = crypt($password , $hashString);

     
        $file = $username . "-" .$_FILES['file']['name'];
        $file_loc = $_FILES['file']['tmp_name'];
        $folder = "./files/";
        $new_file_name = strtolower($file);
        $final_file = str_replace(' ', '-', $new_file_name);
    
   
    if (move_uploaded_file($file_loc, $folder . $final_file)) {
        
   $query = " INSERT INTO user ( firstname , lastname , username, email ,phone ,social ,password, file )  VALUES ('$firstname',' $lastName',  '$username' , '$email', '$phone','$social' , '$password' , '$final_file')"; 

  $insertingData = mysqli_query($connection ,$query);

  if(!$insertingData ){
      echo "<h1 style=\" background-color:white;\"> "." can not insert data to db" ."</h1>";
  } else{
    echo '<script type="text/javascript">alert("Registration Successful!");</script>'; 
    header("Location:login.php");
  }
 }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>JIDAMVA</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="register.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<scrip src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
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

<div class="container" style="background-color: black;"  >
            <form class="form-horizontal" role="form" method="POST" name="myForm" enctype="multipart/form-data" >
                <h2>REGISTER</h2>
                <div class="form-group">
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="First Name" name="firstName" class="form-control" autofocus required> 
                    </div>
                </div>
                <div class="form-group">
                    
                    <div class="col-sm-9">
                        <input type="text" id="lastName" placeholder="Last Name" class="form-control" name="lastName" autofocus required> 
                    </div>
                </div>
                <div class="form-group">
                    
                    <div class="col-sm-9">
                        <input type="text" id="email" placeholder="username" class="form-control" name= "username" required>
                    </div>
                </div>
                <div class="form-group">
               
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email*" class="form-control" name= "email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" name="password" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9">
                        <input type="text" id="phone" placeholder="Phone number" name="phone" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                <div class="col-sm-9">
                        <input type="text" id="social" placeholder="Social Media" name="social" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                <div class="col-sm-7">
                        <input type="file" id="file" placeholder="choose cv*" name="file" class="form-control" required>
                    </div>
                </div>

                <!-- <div class="form-group">
                 <div class="col-sm-9"> -->
               <!-- <label for="file" class="form-group col-sm-5" style="color: white;">choose your CV*</label> -->
               <!-- <input class="margin-left:50%;" type="file" name = "file" id="file" style="color: white;" placeholder="choose CV*" required >
                </div>
                </div> -->
                 
                    
                 <div class="form-group">
                 <button onclick="return validate()" style="border: 0 10% 5% 0 ; width:20%; margin-left:30%;" type="submit" class="form-control" class=" btn btn-advanced" style="background-color: maroon; color:white;">Register</button>
                 </div> 
                    
                    
              
               </form> <!-- /form -->
        </div> <!-- ./container -->

</body>
<script>

function validate() {
  var error = "";
  var numbers = /[0-9?/%#@!$*()+=-_~`.,]/; 
   var first = document.myForm.firstName ;
   var last = document.myForm.lastName ;
   var pass = document.myForm.password ;
   var phone = document.myForm.phone ;
   var letters = /[a-zA-Z@#$^&*()_!~"<>:",'|]/;
 
 if (numbers.test(first.value)) {
        first.style.background = 'red';
        error = "The firstname contains invalid input\n";
	    	alert(error);
	  	 return false;
}
 
 else if (numbers.test(last.value)) {
        last.style.background = 'red';
        error = "The lastname contains invalid characters\n";
		  alert(error);
    
	 	return false;
}

 else if (!(numbers.test(pass.value))) {
        pass.style.background = 'red';
        error = "password must contain special characters\n";
		alert(error);
		return false;
}

 else  if ((pass.value.length<10) ) {
        pass.style.background = 'blue';
        error = "password must be longer than 10 characters\n";
		alert(error);
		return false;
}


else  if (letters.test(phone.value))  {
        phone.style.background = 'green';
        error = "invalid phone number\n";
		alert(error);
		return false;
}

       return true;
}

</script>

</html>

<?php




