<?php 

$db["db_host"] = "localhost";
$db["db_user"] = "root";
$db["db_pass"] =  "" ;
$db["db_name"] =  "driftdsm";

$connection = mysqli_connect ( $db["db_host"] ,$db["db_user"] ,$db["db_pass"] ,$db["db_name"] );

if(!$connection){
    echo  "<h1 style=\" color:white;\">". "Connection failed". "</h1>";
    
}

?>
