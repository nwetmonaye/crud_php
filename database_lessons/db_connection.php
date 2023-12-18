<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // mysqli_connect('hostname', 'userName', 'password', 'databasename',port);
    $connection = mysqli_connect('localhost', 'root', '', 'tododb',3307);

    if ($connection) {
        echo "Database connect success!";
    } else {
        die("Connection fail: " . mysqli_connection_error());
    }
    ?>
</body>

</html>