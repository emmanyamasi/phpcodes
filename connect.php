<?php
$hostname = "localhost";
$dbname = "students";
$username = "root";
$password = "";
$conn = mysqli_connect($hostname, $username, $password, $dbname,);
if ($conn) {
    echo "connected successfully";
} else {
    echo "error connecting";
}
?>