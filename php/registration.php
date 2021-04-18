<?php
session_start();
include "connection.php";

if(isset($_POST["sign-up-btn"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $other = $_POST["otname"];
    $email = $_POST["email"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];

    //Check if user already exist in database;
    $user_query = "SELECT * FROM user_reg WHERE email = '$email'";
    $result1 = $db->query($user_query);
    if($result1->num_rows == 0) {
        //register user
        if($pass1 == $pass2){
        $register_user = "INSERT INTO user_reg(fname, lname, email, mname, password) VALUES('$fname', '$lname', '$email', '$other', '$pass1')";
        if($db->query($register_user)) {
            $fullName = $fname." ".$lname;
            $_SESSION["user"] = $fullName;
            header("location: ../pages/dashboard.php");
        } else {
            echo "user not registered: ".$db->error;
        }
    } else {
        echo '
        <div class="first">
        <div class="second">
       Passwords do not match
       </div>
        </div>
        ';
    }
    
}   else {
        echo "User already exists";
    }
}



if(isset($_POST["sign-in-button"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    
    //Sign in
    $sign_in_query = "SELECT * FROM user_reg WHERE email = '$email' AND password = '$pass'";
    $query_result = $db->query($sign_in_query);
    if($query_result->num_rows > 0) {
        while($user = $query_result->fetch_assoc()) {
            $fname = $user["fname"];
            $lname = $user["lname"];
        }

        $full = $fname." ".$lname;
        $_SESSION["user"] = $full;
        $_SESSION["logged_in"] = "true";
        header("location: ../pages/dashboard.php");
    }
}

?>