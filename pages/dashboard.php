<?php
session_start();
include "../php/connection.php";

if(!isset($_SESSION["user"])) {
    header("location: index.html");
} else {
    //fetch name
    $name = $_SESSION["user"];
    if(isset($_SESSION["logged_in"])) {
        $stat = "You are signed in";
    } else {
        $stat = "You have signed up";
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <div class="navbar">
        <h2>Hi, <?php echo $name ?></h2>
        <a href="../php/logOut.php">Log Out</a>
    </div>

    <div class="main">
        <div class="dashboard">
           <?php echo $stat ?>
        </div>
    </div>
</body>
</html>