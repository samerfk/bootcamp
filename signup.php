<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Sign Up</h3>


    <!-- HyperText Mark up Language -->
    <!-- HTTP is a stateless protocol -->
    <form action="signup-confirm.php" method="post">
        <p>
            Name: <input type="text" name="name" />
        </p>
        <p>
            Email: <input type="text" name="email" />
        </p>
        <p>
            Password: <input type="password" name="password" />
        </p>
        <p>
            Confirm Password: <input type="password" name="password2" />
        </p>

        <input type="submit">

    </form>

    <?php

    // //variable concatenation

    // $fname = "Samer";
    // //$space = " ";
    // $lname = "Khasawneh";
    // $age = 30;

    // //arrays of 3 variables

    // $students = array("John", "Sally", "Alice");


    // for ($i = 0; $i < count($students); $i++) {
    //     echo $students[$i] . "<br />";
    // }


    // //students array

    // $students = array("John" => 95, "Sally" => 96, "Alice" => 89, "Mike" => 100);

    // //print student name and grade they have

    // foreach ($students as $key => $value) {
    //     echo "<p>" . $key . " " . $value . "</p>";
    // }

    // //echo

    // echo "<p>" . $fname . " " . $lname . " I am 30 years old!" . "</p>";

    // echo "<p>" . $fname . "\"" . $lname . " I am " . $age .  " years old!" . "</p>";

    ?>



</body>

</html>