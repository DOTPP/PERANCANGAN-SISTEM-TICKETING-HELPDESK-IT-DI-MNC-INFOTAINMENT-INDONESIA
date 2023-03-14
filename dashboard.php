<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$username = $_SESSION["username"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$departemen = $_SESSION["departemen"];
$id_users = $_SESSION["id"];

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

                        <!-- dashbord content-->
                        <div id="ds">
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary text-white mb-4">
                                        <div class="card-body">
                                            Total Request Tiket

                                            <?php
                                                include 'config/config.php';
                                                
                                               
                                                $conn = mysqli_connect($server, $user, $pass, $database);
                                                $sql= "select count(id_user) AS jumlah from tiket where id_user=$id_users";
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
                                            Menunggu Konfirmasi Admin
                                            <?php
                                                include 'config/config.php';
                                               
                                                $conn = mysqli_connect($server, $user, $pass, $database);
                                                $sql= "select count(id_user) AS jumlah1 from tiket where id_user=$id_users AND status=' Menunggu Konfirmasi Admin' ";
                                                $query = mysqli_query($conn, $sql);
                                                $result = mysqli_fetch_array($query);
                                                $counting = $result["jumlah1"];

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
                                    <div class="card bg-secondary text-white mb-4">
                                        <div class="card-body">
                                            Diproses oleh Admin
                                            <?php
                                                include 'config/config.php';
                                               
                                                $conn = mysqli_connect($server, $user, $pass, $database);
                                                $sql= "select count(id_user) AS jumlah2 from tiket where id_user=$id_users AND status='Diproses oleh Admin' ";
                                                $query = mysqli_query($conn, $sql);
                                                $result = mysqli_fetch_array($query);
                                                $counting = $result["jumlah2"];

                        
                                                    echo "<h3>$counting</h3>";
                                            ?>
                                       </div>
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a type="button" class="small text-white stretched-link" href="#" data-bs-toggle="modal" data-bs-target="#diprosesadmin">
                                                View Details
                                            </a>
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        </div>
                                    </div>
                                </div>

                                

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-warning text-white mb-4">
                                        <div class="card-body">
                                            Diproses oleh Teknisi
                                            <?php
                                                include 'config/config.php';
                                               
                                                $conn = mysqli_connect($server, $user, $pass, $database);
                                                // $sql = "SELECT count(*) AS jumlah FROM tiket ";
                                                $sql= "select count(id_user) AS jumlah3 from tiket where id_user=$id_users AND status='Diproses oleh Teknisi' ";
                                                $query = mysqli_query($conn, $sql);
                                                $result = mysqli_fetch_array($query);
                                                $counting = $result["jumlah3"];

                        
                                                    echo "<h3>$counting</h3>";
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
                                                include 'config/config.php';
                                               
                                                $conn = mysqli_connect($server, $user, $pass, $database);
                                                // $sql = "SELECT count(*) AS jumlah FROM tiket ";
                                                $sql= "select count(id_user) AS jumlah3 from tiket where id_user=$id_users AND status='Selesai Diproses Teknisi' ";
                                                $query = mysqli_query($conn, $sql);
                                                $result = mysqli_fetch_array($query);
                                                $counting = $result["jumlah3"];

                        
                                                    echo "<h3>$counting</h3>";
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
                                                include 'config/config.php';
                                               
                                                $conn = mysqli_connect($server, $user, $pass, $database);
                                                // $sql = "SELECT count(*) AS jumlah FROM tiket ";
                                                $sql= "select count(id_user) AS jumlah3 from tiket where id_user=$id_users AND status='Ditolak' ";
                                                $query = mysqli_query($conn, $sql);
                                                $result = mysqli_fetch_array($query);
                                                $counting = $result["jumlah3"];

                        
                                                    echo "<h3>$counting</h3>";
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

                        <!-- add data-->
                        <div id="cr" class="d-none">
                            <div class="row">
                                <div class="col-md-8 col-sm-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <form action="config/input_add.php" method="POST">
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <!-- id_user -->
                                                            <input class="form-control" type="text" name="id_user" value="<?php echo  $id_users; ?>"  hidden/>
                                                            <input class="form-control" type="text" name="id_teknisi" value="0" hidden />
                                                            <input class="form-control" type="text" name="id_admin" value="0" hidden />
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label class="form-label" for="tanggal">Tanggal</label>
                                                            <input class="form-control" type="date" name="tanggal" value="<?php echo $today; ?>" readonly/>
                                                            
                                                        </div>

                                                        <div class="form-group col-md-6 mt-3">
                                                            <label class="form-label" for="report_by">Report By</label>
                                                            <input class="form-control" type="text" name="report_by"  value="<?php echo  $name; ?>" readonly/>
                                                        </div>

                                                        <div class="form-group col-md-6 mt-3">
                                                            <label for="inputState" class="form-label">Assign to</label>
                                                            <select id="inputState" class="form-select" name="asign_to">
                                                                <option selected value="IT Helpdesk">IT Helpdesk</option>
                                                                <option value="IT Programer">IT Programer</option>
                                                                <option value="IT Infrastruktur">IT Infrastruktur</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-12 mt-3">
                                                            <input class="form-control" type="text" name="teknisi" value="Belum ada teknisi" hidden></input>
                                                        </div>

                                                        <div class="form-group col-md-12 mt-3">
                                                            <label class="form-label" for="Subject">Subject</label>
                                                            <textarea class="form-control" type="text" name="subject"></textarea>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <input class="form-control" type="text" name="status"  value="Menunggu Konfirmasi Admin" hidden/>
                                                        </div>
                                                        
                                                    </div>
                                                <input type="submit" class="btn btn-primary mx-auto d-block mt-4" name="request" value="Request Tiket" />
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end add data-->


                        <!-- data table-->
                        <div id="dt" class="d-none">
                            <div class="row">
                                <div id="tables" class="mt-3">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-table me-1"></i>
                                            Data Tiket
                                        </div>
                                        <div class="card-body">
                                            <table id="datatablesSimple">
                                                <thead>
                                                    <tr>
                                                        <th>Tanggal</th>
                                                        <th>Report By</th>
                                                        <th>asign to</th>
                                                        <th>teknisi</th>
                                                        <th>Subject</th>
                                                        <th>Status</th>
                                                        <th>Update</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>Tanggal</th>
                                                        <th>Report By</th>
                                                        <th>asign to</th>
                                                        <th>teknisi</th>
                                                        <th>Subject</th>
                                                        <th>Status</th>
                                                        <th>Update</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    <?php include 'partials/data_tiket.php'; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
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
                document.getElementById("bread").innerHTML = "Dashboard";
                document.getElementById("append").innerHTML = "Selamat Datang di Dashboard IT Helpdesk";
            });

            $("#b").click(function() {
                $("#ds").addClass("d-none");
                $("#cr").removeClass("d-none");
                $("#cr").addClass("d-block");
                $("#dt").addClass("d-none");
                document.getElementById("bread").innerHTML = "Tambah Data Request";
                document.getElementById("append").innerHTML = "Silakan isi Form untuk Request Tiket";
            });

            
            $("#c").click(function() {
                $("#ds").addClass("d-none");
                $("#cr").addClass("d-none");
                $("#dt").removeClass("d-none");
                $("#dt").addClass("d-block");
                document.getElementById("bread").innerHTML = "Data Request Tiket";
                document.getElementById("append").innerHTML = "Lihat Semua Data Tiket";
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
            document.getElementById("bread").innerHTML = "Dashboard";
            document.getElementById("append").innerHTML = "Selamat Datang di Dashboard IT Helpdesk";
        });
    });

</script>
