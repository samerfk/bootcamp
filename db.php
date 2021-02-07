<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //variables

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "bootcamp";

    //setup the connection into out database
    $conn = mysqli_connect($localhost, $username, $password, $database);

    //test my connection
    if (!$conn) {
        die("Connection Error"  . mysqli_connect_error());
    }
    //connection is successful
    else {
        // echo "<p style=\"color:green\">Connection successful</p>";
    }

    ?>
</body>

</html>