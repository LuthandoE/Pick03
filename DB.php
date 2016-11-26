<?php
$servername = "localhost";
$username = "root";
$password = "";


$con = new mysqli($servername, $username, $password);

if ($con->connect_error) {
    die("Unable to connect to a database") . $con->error;
}
$sql ="CREATE DATABASE pikDB";
if ($con->query($sql) === true) {
    echo "Database has been created successfully";
} else {
    echo "Error while trying to creating a DB" . $con->error;
}
?>