<?php
//Include database connection
//Make sure the names attribute in hmtl form matches the name in $_POST index


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

    mysqli_query($con,$q); //executing query

    
}





//Your tasks is to create to select and display data from the dadabase, select all insert users and their details


// if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "<tr>
//                 <td>".$row['Id']."</td>
//                 <td>".$row['names']."</td>
//                 <td>".$row['Telphone']."</td>
//                 <td>".$row['email']."</td>
//                 <td>".$row['Pass']."</td>
//                 <td>".$row['Tim']."</td>
//               </tr>";
//     }
// } else {
//     echo "<tr><td colspan='6'>No records found</td></tr>";
// }

?>