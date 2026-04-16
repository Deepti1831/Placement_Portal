<?php
$conn = new mysqli("localhost","root","","campus_hire_db");

if($conn->connect_error){
die("DB Error");
}
?>