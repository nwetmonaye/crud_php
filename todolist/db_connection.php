<?php
    // mysqli_connect('hostname', 'userName', 'password', 'databasename',port);
    $connection = mysqli_connect('localhost', 'root', '', 'tododb',3307);

    if (!$connection) {
        die("Connection fail: " . mysqli_connection_error());
    } 