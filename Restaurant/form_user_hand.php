<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted Orders</title>
</head>
<body>

    <h2>Submitted Orders</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Item</th>
            <th>Price</th>
        </tr>

        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>".$row['id']."</td>
                        <td>".$row['name']."</td>
                        <td>".$row['item']."</td>
                        <td>".$row['price']."</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No orders found</td></tr>";
        }
        ?>
    </table>

</body>
</html>

<?php
// Close connection
mysqli_close($con);
?>