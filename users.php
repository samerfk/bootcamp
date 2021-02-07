<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>All Users</h3>
    <?php
    include('db.php');

    $sql = "select * from users";

    //run the query

    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($result)) {
        echo "<p><b>" . $row['name'] . "</b> &nbsp; &nbsp; &nbsp; " . $row['email'] . "</p>";
    }

    //sessions


    ?>
</body>

</html>