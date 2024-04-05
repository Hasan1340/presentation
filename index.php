<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "presentation";

$con = mysqli_connect($host, $username, $password, $db);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>

<body>
    <h1 style="text-align: center;">Welcome to my website</h1>
    <?php
    $sql = "SELECT * FROM users";

    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h3 style='text-align:center'>Your name is " . $row['username'] . " and your email id is " . $row['email'] . "</h3>";
        }
    } else
        echo "No data found";
    $con->close();
    ?>

</body>

</html>