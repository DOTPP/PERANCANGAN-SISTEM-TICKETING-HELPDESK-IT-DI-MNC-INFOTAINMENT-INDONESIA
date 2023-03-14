

<?php 
 
include 'partials/config.php';
 
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
        $sql = "SELECT * FROM admin WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO admin (username, email, password, name, departemen, photo)
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
<html lang="en">
<head>
<?php  include 'partials/head.php';?>
    <title>Starpro Helpdesk</title>
</head>
<body class="sb-nav-fixed">


    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="dashboard.php">Ticketing Helpdesk</a>
            <button class="float-end btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile <i class="ms-2 fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!"><?php echo $email ?></a></li>
                        <li><a class="dropdown-item" href="#!"><?php echo $departemen ?></a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <?php include 'partials/sidebar.php';?>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">

                    <div class="row">
                        <div class="col-12">
                            <div class="my-4">

                                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="dashboard.php" style="text-decoration:none;">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page" id="bread">Dashboard</li>
                                    </ol>
                                </nav>

                                <h4>
                                    <span class="txt-grey">Hi </span> 
                                    <b class="txt-navy"><?php echo  $name ?></b> ,
                                    <span id="append" class="txt-grey">Selamat Datang di Dashboard IT Helpdesk</span>
                                </h4>
                                <hr>
                            </div>
                        </div>
                    </div>
<body>
<div id="cr" class="d-none">
                            <div class="row">
                                <div class="col-md-8 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">

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
                <input type="text" placeholder="dep" name="dep" value="IT Admin" readonly required>
            </div>

            <div class="input-group">
                <input type="hidden" placeholder="photo" name="photo" value="test.jpg" required>
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="index.php">Login </a></p>
        </form>
    </div>
</body>
</html>