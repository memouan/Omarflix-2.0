<?php
$conn = new mysqli('sql305.epizy.com','epiz_32361330','Aa93929110','epiz_32361330_omarflix');

if ($conn->connect_error) {
   die("Error: There is something error".$conn->connect_error);
} else {
    echo "Database connect successfuly";
}
?>