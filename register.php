<?php
include 'db.php';

$conn->query("INSERT INTO users (name,email,password)
VALUES ('$_POST[name]','$_POST[email]','$_POST[password]')");

echo "Registered";
?>