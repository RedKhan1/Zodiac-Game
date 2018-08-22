<?php

// conncect to MySQL

$conn = mysqli_connect('localhost', 'root', 'mysql') or die("Couldn't connect to MySQL");

// connect to database

mysqli_select_db($conn, 'loftyheights2');


?>