<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

$username = $_SESSION["username"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$departemen = $_SESSION["departemen"];
$id_admin = $_SESSION["id_admin"];

    $month = date('m');
    $day = date('d');
    $year = date('Y');
    $today = $year . '-' . $month . '-' . $day;



?>



 
<!DOCTYPE html>
<html lang="en">
<head>
<?php  include 'partials/head.php';?>
    <title>Starpro Helpdesk</title>
</head>
<body class="sb-nav-fixed">


    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
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

                        <!-- dashbord content-->
                        <div id="ds">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary text-white mb-4">
                                        <div class="card-body">
                                            Total Request Tiket
                                            <?php
                                                include 'partials/config.php';
                                               
                                                $conn = mysqli_connect($server, $user, $pass, $database);
                                                $sql= "select count(*) AS jumlah from tiket";
                                                $query = mysqli_query($conn, $sql);
                                                $result = mysqli_fetch_array($query);
                                                $counting = $result["jumlah"];

                                                    echo "<h3>  $counting </h3>";
                                            ?>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">

                                            <a type="button" class="small text-white stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#total">
                                                View Details
                                            </a>

                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-info text-white mb-4">
                                        <div class="card-body">
                                            Menunggu Konfirmasi
                                            <?php
                                                include 'partials/config.php';
                                               
                                                $conn = mysqli_connect($server, $user, $pass, $database);
                                                $sql= "select count(status) AS jumlah from tiket where status=' Menunggu Konfirmasi Admin'";
                                                $query = mysqli_query($conn, $sql);
                                                $result = mysqli_fetch_array($query);
                                                $counting = $result["jumlah"];

                                                    echo "<h3>  $counting </h3>";
                                            ?>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <a type="button" class="small text-white stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#menunggukonfirm">
                                                View Details
                                            </a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-warning text-white mb-4">
                                        <div class="card-body">
                                            Tiket Diproses Oleh Teknisi
                                            <?php
                                                include 'partials/config.php';
                                               
                                                $conn = mysqli_connect($server, $user, $pass, $database);
                                                $sql= "select count(status) AS jumlah from tiket where status='Diproses oleh Teknisi'";
                                                $query = mysqli_query($conn, $sql);
                                                $result = mysqli_fetch_array($query);
                                                $counting = $result["jumlah"];

                                                    echo "<h3>  $counting </h3>";
                                            ?>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a type="button" class="small text-white stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#diprosesteknisi">
                                                View Details
                                            </a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-success text-white mb-4">
                                        <div class="card-body">
                                            Tiket Selesai
                                            <?php
                                                include 'partials/config.php';
                                               
                                                $conn = mysqli_connect($server, $user, $pass, $database);
                                                $sql= "select count(status) AS jumlah from tiket where status='Selesai Diproses Teknisi'";
                                                $query = mysqli_query($conn, $sql);
                                                $result = mysqli_fetch_array($query);
                                                $counting = $result["jumlah"];

                                                    echo "<h3>  $counting </h3>";
                                            ?>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a type="button" class="small text-white stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#tiketselesai">
                                                View Details
                                            </a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-danger text-white mb-4">
                                        <div class="card-body">
                                            Tiket Ditolak
                                            <?php
                                                include 'partials/config.php';
                                               
                                                $conn = mysqli_connect($server, $user, $pass, $database);
                                                $sql= "select count(status) AS jumlah from tiket where status='Ditolak'";
                                                $query = mysqli_query($conn, $sql);
                                                $result = mysqli_fetch_array($query);
                                                $counting = $result["jumlah"];

                                                    echo "<h3>  $counting </h3>";
                                            ?>
                                        </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a type="button" class="small text-white stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#ditolak">
                                                View Details
                                            </a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end dashbord content-->

                        <!-- data table-->
                        <div id="dt" class="d-none">
                            <div class="row">
                            <?php include 'data_tiket.php';?>
                            </div>
                        </div>


                        <div id="dt2" class="d-none">
                            <div class="row">
                            <?php include 'register_teknisi.php';?>
                            </div>
                        </div>
                         <!--end data table-->

                    </div>
                </main>

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; IT Helpdesk Dwi Irawan 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>

        </div>

</body>
</html>

<?php include 'modal_detail.php';?>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
        $(document).ready(function() {
            $("#a").click(function() {
                $("#ds").addClass("d-block");
                $("#ds").removeClass("d-none");
                $("#cr").addClass("d-none");
                $("#dt").addClass("d-none");
                $("#dt2").addClass("d-none");
                document.getElementById("bread").innerHTML = "Dashboard";
                document.getElementById("append").innerHTML = "Selamat Datang di Dashboard IT Helpdesk";
            });

            $("#b").click(function() {
                $("#ds").addClass("d-none");
                $("#cr").removeClass("d-none");
                $("#cr").addClass("d-block");
                $("#dt").addClass("d-none");
                $("#dt2").addClass("d-none");
                document.getElementById("bread").innerHTML = "Tambah Data Request";
                document.getElementById("append").innerHTML = "Silakan isi Form untuk Request Tiket";
            });

            
            $("#c").click(function() {
                $("#ds").addClass("d-none");
                $("#cr").addClass("d-none");
                $("#dt").removeClass("d-none");
                $("#dt").addClass("d-block");
                $("#dt2").addClass("d-none");
                document.getElementById("bread").innerHTML = "Data Request Tiket";
                document.getElementById("append").innerHTML = "Lihat Semua Data Tiket";
            });

            $("#x").click(function() {
                $("#ds").addClass("d-none");
                $("#cr").addClass("d-none");
                $("#dt2").removeClass("d-none");
                $("#dt").addClass("d-none");
                $("#dt2").addClass("d-block");
                document.getElementById("bread").innerHTML = "Data Request Teknisi";
                document.getElementById("append").innerHTML = "Lihat Semua Data Teknisi";
            });
        });
        
    </script>

<script>
    $(document).ready(function() {
        $("#a").click(function() {
            $("#ds").addClass("d-block");
            $("#ds").removeClass("d-none");
            $("#cr").addClass("d-none");
            $("#dt").addClass("d-none");
            $("#dt2").addClass("d-none");
            document.getElementById("bread").innerHTML = "Dashboard";
            document.getElementById("append").innerHTML = "Selamat Datang di Dashboard IT Helpdesk";
        });
    });

</script>
