<?php
//Include database connection
//Make usre the names attribute in hmtl form matches the name in S_POST index


include ("connection.php");
//To check if the user has submitted
if(isset($_REQUEST["submit"])){
    $name = $_REQUEST["fname"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["pass"];
    $tel = $_REQUEST["tel"];

    //This is the correct way to insert data.


    $q = "INSERT INTO users (`Id`, `names`, `Telphone`, `email`, `Pass`, `Tim`) 
    VALUES (NULL, '$name', '$tel', '$email', '$password', current_timestamp())";

    mysqli_query($con,$q);;

    
}
//Your tasks is to create to select and display data from the dadabase, select all insert usersand their details

?>