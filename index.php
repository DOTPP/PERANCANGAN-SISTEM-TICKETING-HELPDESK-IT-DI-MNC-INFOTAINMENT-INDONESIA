<?php

include 'config/config.php';

error_reporting(0);

session_start();

include 'partials/auth.php';


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

        //user
        $user_sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $user_result = mysqli_query($conn, $user_sql);
        if ($user_result->num_rows > 0) {
            $row = mysqli_fetch_assoc($user_result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['departemen'] = $row['departemen'];
            $_SESSION['id'] = $row['id'];
            header("Location: dashboard.php");
            exit();
            
        }

        //admin
        $admin_sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
        $admin_result = mysqli_query($conn, $admin_sql);
        if ($admin_result->num_rows > 0) {
            $row = mysqli_fetch_assoc($admin_result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['departemen'] = $row['departemen'];
            $_SESSION['id_admin'] = $row['id_admin'];
            header("Location: admin/dashboard.php");
            exit();
        }

        //teknisi
    $teknisi_sql = "SELECT * FROM teknisi WHERE email='$email' AND password='$password'";
    $teknisi_result = mysqli_query($conn, $teknisi_sql);
    if ($teknisi_result->num_rows > 0) {
        $row = mysqli_fetch_assoc($teknisi_result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['departemen'] = $row['departemen'];
        $_SESSION['id_teknisi'] = $row['id_teknisi'];
        header("Location: teknisi/dashboard.php");
        exit();
    }
    else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <?php include 'partials/config.php'; ?>
    <?php include 'partials/head.php'; ?>
    <title>Starpro Helpdesk</title>
</head>

<body>
    <div class="alert" role="alert">
        <?php echo $_SESSION['error'] ?>
    </div>

    <div class="container-fluid" style="background-image: url('https://t3.ftcdn.net/jpg/03/86/41/60/360_F_386416045_DI54oeYP9gLaUsK0PuJVF7qKtnryqsBu.jpg'); background-size: cover;">
        <div class="row">
            <div class="col-md-4 mx-auto py-4">
                <div class="card">
                    <div class="card-body">

                        <form action="" method="POST" class="login-email">
                            <p style="font-size: 2rem; font-weight: 800;" class="text-center">Login User</p>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input class="form-control" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                            </div>

                            <div class="mb-3">
                                <button name="submit" class="btn btn-primary mx-auto d-block" style="max-width: 200px; width:200px;">Login</button>
                            </div>

                            <p class="login-register-text text-center mt-4" style="color:#939393; font-size:14px;">
                                    Anda belum punya akun ?  Silahkan Hubungi Admin <!--<a href="register.php">Register</a> --> 
                                </p>
                            
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>