<?php

$conn = new mysqli(
"localhost",
"root",
"",
"agribusiness"
);

if($conn->connect_error){
die("Connection Failed");
}

?>