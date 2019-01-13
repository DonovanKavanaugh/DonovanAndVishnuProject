<?php
    require_once "login.php";

    $connection = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

//And now to perform a simple query to make sure it's working
    $query = "SELECT * FROM sports";
    $result = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "sport is: " . $row['sport'] . " and about is: " . $row['about'];
    }
