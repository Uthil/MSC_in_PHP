<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "antoniou_137979";
    $con = new mysqli($servername, $username, $password, $dbname);
    if ($con->connect_error){
        die("Αποτυχία σύνδεσης με την Βάση Δεδομένων!". $con->connect_error);
    }
    mysqli_set_charset($con, "utf8");
?>