<?php
session_start();
?>

<title>JIDAMVA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/main.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="mystyle.css">
  </head>
 <body style="font-size: 12px;">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:maroon;">
    <div class="container-fluid">
    <li class="nav-link ms-lg-4">
            <a class="nav-link active" id="item" href="welcome.php">HOME</a>
          </li>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         
          <li class="nav-item ms-lg-4">
            <a class="nav-link active " id="item" href="course.php">COURSE</a>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link active " id="item" href="./files/cv.php">CV</a>
          </li>
        <li class="nav-item ms-lg-4">
            <a class="nav-link active " id="item" href="LOGOUT.php">LOG OUT</a>
          </li>
          </li>
          <li class="nav-item ms-lg-4">
            <a class="nav-link active " id="item" href="courseDisplay.php">MY COURSES</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
<div class="container1">

<div class="itemsLhs" >
<img src="profilepic.PNG" alt="" height="300" width="300">
</div>
<div class="centreitemsdiv" >

   <h4 style="color:white ;">
    WELCOME TO YOUR PROFILE
  </h4>
    <h6> <?php  echo "<h4 style=\"color:white ;\">"."NAME : " . $_SESSION['username']."</h4>" ?></h6>
    <h6> <?php  echo "<h4 style=\"color:white ;\">"."EMAIL : " . $_SESSION['email']."</h4>" ?></h6>
    
</div>
</div>

</body>