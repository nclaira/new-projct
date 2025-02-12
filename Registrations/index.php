<?php

include("connection.php");
$sel="SELECT * FROM `users`;";

//we are going to execute a query
$result=mysqli_query($con,$sel);
//this gives us an array

if(mysqli_num_rows($result)<0){
    echo "no student registered";
} else{
    //$cont_rows= mysqli_num_rows($result);
    
    while($r = $result->fetch_assoc()){
        //Nibidn ubukore utya ubishire muti tables, n styles nziza
        echo $r["names"];
    }
}


?>