<?php 
session_start();
 $db["db_host"] = "localhost";
$db["db_user"] = "root";
$db["db_pass"] =  "" ;
$db["db_name"] =  "driftdsm";

$connection = mysqli_connect ( $db["db_host"] ,$db["db_user"] ,$db["db_pass"] ,$db["db_name"] );

if(!$connection){
    echo "Connection failed";
}

?>


<?php
if (!isset($_SESSION['id'])) {
    header("Location:../profile.php");
}

$id = $_SESSION['id'];
$query  = " SELECT * FROM user WHERE id = '$id'";
$res = mysqli_query($connection, $query);
print_r($_SESSION);
$last = mysqli_fetch_assoc($res);
$file = $last['file'];

header('Content-type: application/pdf');

header('Content-Disposition: inline; filename=" ' . $file . ' "');

header('Content-Transfer-Encoding: binary');

header('Accept-Ranges: bytes');


@readfile($file);

?>