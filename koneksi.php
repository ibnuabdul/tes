<?php
$connection = mysqli_connect("localhost", "root", "", "kasirr");
if (!$connection){
    die("Connection Failed:".mysqli_connect_error());
}
?>  