<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'quiz');
define('DB_USER','root');
define('DB_PASSWORD','');




$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if( mysqli_connect_error()) echo "Failed to connect to MySQL: " . mysqli_connect_error();