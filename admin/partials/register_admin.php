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
    
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM admin WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO admin (username, email, password, name, departemen)
                    VALUES ('$username', '$email', '$password', '$name', '$dep')";
            $result = mysqli_query($conn, $sql);
            
            
        if( $result ) {
            header("Location: ../sukses_register.php");

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