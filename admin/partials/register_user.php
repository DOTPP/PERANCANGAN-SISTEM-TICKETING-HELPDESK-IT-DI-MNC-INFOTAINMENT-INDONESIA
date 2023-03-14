<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $name = $_POST['name'];
    $dep = $_POST['departemen'];
    $photo = $_POST['photo'];
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password, name, departemen, photo)
                    VALUES ('$username', '$email', '$password', '$name', '$dep', '$photo')";
            $result = mysqli_query($conn, $sql);
            
            
        if( $query ) {
            header('Location: ../sukses_register.php');

                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
                $name = "";
                $dep = "";
                
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}