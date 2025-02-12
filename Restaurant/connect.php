<?php
// Database connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "restaurant";

$con = mysqli_connect($host, $user, $pass, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Your query to fetch data

$query = "SELECT id, name, item, price FROM orders";  // Replace with your actual table name and columns
$result = mysqli_query($con, $query);


// Check if the query was successful
if ($result === false) {
    die("Error in query execution: " . mysqli_error($con));
}

// Insert data into the database when form is submitted
if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $item = $_POST["item"];
    $price = $_POST["price"];

    $query = "INSERT INTO users1 (`id`, `name`, `item`, `price`) 
              VALUES (NULL, '$name', '$item', '$price')";

    if (mysqli_query($con, $query)) {
        echo "<p style='color: green;'>Order added successfully!</p>";
    } else {
        echo "<p style='color: red;'>Error: " . mysqli_error($con) . "</p>";
    }
}
