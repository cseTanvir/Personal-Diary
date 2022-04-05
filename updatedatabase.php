<?php

    session_start();

    if (array_key_exists("content", $_POST)) {
        
        include("connection.php");

$simple_string=$_POST['content'];

// Store the encryption key
$query2 = "SELECT `email` FROM `users` WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";
$row2 = mysqli_fetch_array(mysqli_query($link, $query2));

$hashedkey=md5(md5($row2['email']));
$encryption_key = $hashedkey;
// Non-NULL Initialization Vector for encryption
$encryption_iv = substr($hashedkey, 0, 16);
// Store the cipher method
$ciphering = "AES-128-CTR";

// Use OpenSSl Encryption method
$iv_length = openssl_cipher_iv_length($ciphering);
$options = 0;






// Use openssl_encrypt() function to encrypt the data
$encryption = openssl_encrypt($simple_string, $ciphering,
			$encryption_key, $options, $encryption_iv);




        
        
        $query = "UPDATE `users` SET `diary` = '$encryption' WHERE id = ".mysqli_real_escape_string($link, $_SESSION['id'])." LIMIT 1";
        
        mysqli_query($link, $query);
        
    }

?>
