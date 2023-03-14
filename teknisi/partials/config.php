<?php 
 
$server = "localhost";
$user = "u1249867_TI53";
$pass = "b4635teh";
$database = "u1249867_help_desk";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>