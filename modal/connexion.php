<?php

$conn = mysqli_connect("localhost","root","","MVS");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>