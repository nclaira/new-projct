<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Order Form table with database</title>
</head>
<body>

    <!--we are going to create table -->
    <table>
        <tr>
            <th>id</th>
            <th>username</th>
            <th>password</th>
        </tr>


        <!--now we are going to connect it with database
        now we start our php codes-->

        <?php
        $conn=mysqli_connect("localhost","root","","");
        if($conn->connect_error){
            die("connection failed:".$conn->connect_error);
        }

        $sql="SELECT id,username,password from tablename";
        $conn->query($sql);
        $result=$conn->query($sql);

        if($result->num_rows > 0){
            while($row=$result->fetch_assoc()){
                echo"<tr><td>".$row["id"]."</td><td>".$row["sername"]."</td><td>".$row["password"]."</td><tr>";

            }
            echo"</table>";
        }
        else{
            echo"0 result";
        }
        $conn->close();
        ?>

    </table>

</body>
</html>