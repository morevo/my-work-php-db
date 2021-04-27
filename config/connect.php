<?php

    $connect = mysqli_connect("localhost","root","root","bombur"); // Connect to database

    if(!$connect) {
        die("Error connect to database!");
    };

?>