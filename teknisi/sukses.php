

<?php
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$username = $_SESSION["username"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$id_teknisi = $_SESSION["id_teknisi"];

?>



<html lang="en">
<head>
    <?php include 'partials/head.php';?>
    <title>Document</title>
</head>
<body>

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
            <a class="navbar-brand ps-3" href="dashboard.php">Ticketing Helpdesk</a>
            <button class="float-end btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-5">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile <i class="ms-2 fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!"><?php $email ?></a></li>
                        <li><a class="dropdown-item" href="#!"><?php $unit ?></a></li>
                    </ul>
                </li>
            </ul>
        </nav>


                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 mx-auto col-lg-5 col-sm-12">
                                    <div class="card  mt-5">
                                        <div class="card-body">


                                            <div class="icon-ss mx-auto d-block text-center mb-3">  
                                                <i class="bi bi-check2-circle hj "></i> 
                                            </div>

                                            <h5 class="text-center text-navy">Hi, <?php echo  $name ?></h5>
                                            <h4 class="text-center">Request Tiket Sukses Disimpan</h4>
                                            <p class="text-center">Admin akan segera memproses tiket kamu</p>

                                            <a href="dashboard.php" class="text-center mx-auto d-block ah mt-3">kembali ke dashboard</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        





    
</body>
</html>