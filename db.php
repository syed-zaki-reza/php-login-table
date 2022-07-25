<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "regform";

    $connection = mysqli_connect($servername, $username, $password, $databasename);

    if(!$connection) echo "Not Connected To Database";
?>