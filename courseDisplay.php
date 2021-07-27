<?php include "Mydb.php"; 
 session_start();
 $sec_id = $_SESSION['id'];
?>
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
            <a class="nav-link active" id="item" href="welcome.php">HOME</a>
          </li>
      <button class="navbar-toggler" type="button" data-bs-toggle= "collapse" data-bs-target="#navbarSupportedContent"
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

<?php
$sql = " SELECT course , course_code , year , semester , teacherName , marks FROM course WHERE sec_id= '$sec_id'";
$result = $connection->query($sql);
if ($result->num_rows > 0) {

    echo "<table class=\"table\"  style=\"color:white ;\"  >
    
    <tr>
    <th>Course name</th>
    <th>Course code</th>
    <th>Year</th>
    <th>Semester</th>
    <th>Instructor</th>
    <th>Grade</th>
    
    </tr>";
  while($row = $result->fetch_assoc()) {

    echo "<tr>";
    echo  "<th>". $row["course"]. "</th>" ; 
    echo "<th>" . $row["course_code"] ."</th>" ;
    echo  "<th>". $row["year"]."</th>" ;
    echo  "<th>" .$row["semester"]."</th>" ;
    echo  "<th>" .$row["teacherName"] ."</th>";
    echo   "<th>".$row["marks"]."</th>";  
    
    echo "</tr>";
}
echo "</table>";

} else {
  echo "<h4 style=\"color:white;\">" . "0 results" ."</h4>";
}
$connection->close();
?>

<style>

.table{

  margin-left:0%;
  margin-right:80%;


}

</style>


