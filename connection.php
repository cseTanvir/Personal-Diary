<?php
//server name
$servername = "localhost";
//server user
$username = "user";
//server user password
$password = "password";
//database for the web application
$databaseu ="databaseName";

// Create connection   
$link = mysqli_connect($servername, $username, $password,$databaseu);
       
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>
