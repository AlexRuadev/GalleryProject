<?php 

// informations needed to connect to the database
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "galleryPhp";

// run the connection
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}