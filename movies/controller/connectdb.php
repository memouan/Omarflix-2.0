<?php
$conn = new mysqli('localhost','root','root','omarflix');

if ($conn->connect_error) {
   die("Error: There is something error".$conn->connect_error);
} else {
    echo "Database connect successfuly";
}
?>