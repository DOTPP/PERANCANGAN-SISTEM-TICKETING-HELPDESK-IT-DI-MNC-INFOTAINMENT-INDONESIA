

<?php 
 
 include 'partials/config.php';
  
 error_reporting(0);
  
 session_start();
  
 if (isset($_SESSION['username'])) {
     header("Location: index.php");
 }
  
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
             if ($result) {
                 echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                 $username = "";
                 $email = "";
                 $_POST['password'] = "";
                 $_POST['cpassword'] = "";
                 $name = "";
                 $dep = "";
                 $photo = "";
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
  
 ?>
  
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
     <link rel="stylesheet" type="text/css" href="style.css">
  
     <title>App Wawan</title>
 </head>
 <body>
     <div class="container">
         <form action="" method="POST" class="login-email">
             <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
             <div class="input-group">
                 <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
             </div>
             <div class="input-group">
                 <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
             </div>
             <div class="input-group">
                 <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
             </div>
             <div class="input-group">
                 <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
             </div>
 
             <div class="input-group">
                 <input type="text" placeholder="name" name="name" value="<?php echo $name; ?>" required>
             </div>
 
             <div class="input-group">
                 
                 <select class="form-select" aria-label="Default select example" name="dep">
                    <option selected>Open this select menu</option>
                    <option value="Finance">Finance</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Management">Management</option>
                </select>
             </div>
 
             <div class="input-group">
                 <input type="hidden" placeholder="photo" name="photo" value="test.jpg" required>
             </div>
             <div class="input-group">
                 <button name="submit" class="btn">Register</button>
             </div>
             <!-- <p class="login-register-text">Anda sudah punya akun? <a href="index.php">Login </a></p> -->
         </form>
     </div>
 </body>
 </html>