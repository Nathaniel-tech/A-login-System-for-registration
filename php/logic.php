<?php
include "database.php";

if(isset($_POST["fname"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mname = $_POST["mname"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $pass1 = $_POST["pass1"];
    
    //check if user already exist
    $check_user = "SELECT * FROM user WHERE email = '$email' LIMIT 1";

}




?>