<?php
$db = new mysqli("localhost", "root", "", "register");
if(mysqli_connect_error()) {
    echo "Could not estabalish connection: ".mysqli_connect_error();
} 

?>