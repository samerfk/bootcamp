<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //include the database file
    include('db.php');

    //get the email and password

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE email = '$email' and password = '$password'";

    //run the query
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) { //correct email and password
        while ($row = mysqli_fetch_array($result)) {
            echo "<p>Welcome " . $row['name'] . "! You are logged-in </p>";
        }
    } else {
        //
        echo "<p style=\"color:red\">Unsuccessful login</p>";
        echo "<p><a href=\"signin.php\">Sign in</a></p>";
    }


    ?>

</body>

</html>