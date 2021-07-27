<?php
session_start();
include "Mydb.php";  
// if (!isset($_SESSION)){
//     header("Location:login.php");
// } 
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $course = $_POST["course"];
    $course_code = $_POST["course_code"];
    $year = $_POST["year"];
    $semester = $_POST["semester"];
    $instructor = $_POST["teacherName"];
    $marks = $_POST["marks"];
    $sec_id = $_SESSION['id'];

    // $hash_password=password_hash($password,PASSWORD_BCRYPT);
    $query = " INSERT INTO course (course ,course_code , year , semester ,teachername , marks, sec_id )  VALUES ('$course',' $course_code',  '$year' , '$semester' , '$instructor', '$marks', '$sec_id')";

    $insertingData = mysqli_query($connection, $query);

    if (!$insertingData) {
        echo "can not insert data to db ";
    } else {

        header("Location:courseDisplay.php");
    }
}
?>
<head>
<title>JIDAMVA</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="mystyle.css">
  </head>
 <body style="font-size: 12px;background-color:black;">
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
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="container">
    <form class="form-horizontal" role="form" method="POST">
        <div class="form-group">
            <label for="courseName" class="col-sm-3 control-label" style="color: white;">COURSE</label>
            <div class="col-sm-4">
                <select  class="form-select" name="course" required>
                    <option>Communication skills</option>
                    <option>Development perspective</option>
                    <option> Foundation of Analysis</option>
                    <option>Programming in java</option>
                    <option>Computer maintenance</option>
                    <option>Computer Organization and architecture</option>
                    <option>Web Programming</option>
                    <option>Business Communication</option>
                    <option>Discrete Structures</option>
                    <option>C Programming</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="text" class="col-sm-3 control-label" style="color: white;">CODE</label>
            <div class="col-sm-4">

                <select class="form-select" name="course_code" required>
                    <option>CL 111</option>
                    <option>DS 113</option>
                    <option>MT 100</option>
                    <option>CS 175</option>
                    <option>IS 158</option>
                    <option>IS 161</option>
                    <option>MT 171</option>
                    <option>IS 181</option>
                    <option>CS 173</option>
                    <option>IS 143</option>
                    <option>CS 151</option>
                </select>

            </div>
        </div>
        <div class="form-group">
            <label for="year" class="col-sm-3 control-label" style="color: white;">YEAR </label>
            <div class="col-sm-4">
                <select class="form-select" name="year" required>
                    <option >1</option>
                    <option >2</option>
                    <option >3</option>
                    <option >4</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="semester" class="col-sm-3 control-label" style="color: white;">SEMESTER</label>
            <div class="col-sm-4">
                <select class="form-select" name="semester">
                    <option >1</option>
                    <option >2</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="teachername" class="col-sm-1 control-label" style="color: white;">Instructor</label>
            <input type="text" name="teacherName" id="teacherName" required>
        </div>
        <div class="form-group">
            <label for="marks" class="col-sm-1 control-label" style="color: white;">Marks</label>
            <input type="text" name="marks" id="marks" required>


        </div>
         <button type="submit" class="btn btn-advanced mb-3" style="background-color: maroon;  color:white;">Register Course</button>
    </form> <!-- /form -->
</div> <!-- ./container -->