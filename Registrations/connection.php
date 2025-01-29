<?php
$db = "Kicukiro";
$user = "root";
$pass = "";
$host = "localhost";


$con = mysqli_connect($host, $user, $pass, $db);
if ($con) { 
    echo "Connected to dabasse";
}
else {
    echo "Error!";
}
?>

