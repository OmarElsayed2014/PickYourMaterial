<?php

$mail = $_GET['mail'];
$dbUser = "root"; 
        $dbPass = "54889";
        $dbHost = "localhost";
        $dbName = "slms";


        $con = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

        $query = "SELECT * FROM user WHERE email='$mail'";
        $result = mysqli_query($con,$query);

        if(mysqli_num_rows($result)) {
            echo 'not';
            
        }
        else {
            echo 'valid';
        }

        