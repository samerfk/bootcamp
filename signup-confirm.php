<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Thanks for submitting the form!</h3>

    <?php

    include('db.php');
    //get the name  email and password

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];





    //check if email already exists

    $sql = "SELECT * FROM `users` WHERE email = '$email'";

    //run the query

    $result = mysqli_query($conn, $sql);

    //check if result has 1 or more

    if (mysqli_num_rows($result) > 0) { //email exists
        echo "<p>Email already in use</p>";
    } else {
        //email doesn't exist
        echo "<p>Welcome, $name .. We have your email address as $email</p>";

        $sql = "insert into users(name, email, password) values (\"$name\", \"$email\", \"$password\")";

        //$sql2 = "NSERT INTO `users`(`name`, `email`, `password`) VALUES ($name,$,[value-4])"

        if (mysqli_query($conn, $sql)) {
            echo "<p>1 row inserted ... </p>";
        } else {
            echo "<p>Error " . mysqli_error($conn) . "</p>";
        }
    }

    echo "<a href=\"signup.php\">Sign-up page</a>";

    ?>
</body>

</html>