<?php
session_start();
include 'db.php';

$res=$conn->query("SELECT * FROM users WHERE email='$_POST[email]' AND password='$_POST[password]'");

if($res->num_rows>0){
$_SESSION['user']=$_POST['email'];
echo "success";
}else{
echo "invalid";
}
?>