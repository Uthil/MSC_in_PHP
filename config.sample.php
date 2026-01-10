<?php
    $servername = "YOUR_IP_ADDRESS";
    $username = "YOUR_USERNAME";
    $password = "YOUR_PASSWORD";
    $dbname = "YOUR_DATABASE_NAME";
    $con = new mysqli($servername, $username, $password, $dbname);
    if ($con->connect_error){
        die("Αποτυχία σύνδεσης με την Βάση Δεδομένων!". $con->connect_error);
    }
    mysqli_set_charset($con, "utf8"); // Ορίζουμε την κωδικοποίηση σε UTF-8
?>