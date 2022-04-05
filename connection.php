<?php
//server name
$servername = "localhost";
//server user
$username = "user";
//server user password
$password = "0NEhc2gK.4Xk)y]g";
//database for the web application
$databaseu ="users";

// Create connection   
$link = mysqli_connect($servername, $username, $password,$databaseu);
       
        if (mysqli_connect_error()) {
            
            die ("Database Connection Error");
            
        }

?>