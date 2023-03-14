<?php

include 'partials/config.php';

if (!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}


// kalau tidak ada id di query string
if (!isset($_GET['id_tiket'])) {
    header('Location: form_edit.php');
}

//ambil id dari query string
$id_tiket = $_GET['id_tiket'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM tiket WHERE id_tiket=$id_tiket";
$query = mysqli_query($conn, $sql);
$tiket = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>

<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

$username = $_SESSION["username"];
$name = $_SESSION["name"];
$email = $_SESSION["email"];
$id_teknisi = $_SESSION["id_teknisi"];

    $month = date('m');
    $day = date('d');
    $year = date('Y');
    $today = $year . '-' . $month . '-' . $day;



?>


<!DOCTYPE html>
<html>

<head>
    <title>Formulir Edit tiket </title>
    <?php include '../partials/head.php'; ?>
</head>

<body>

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-success">
        <a class="navbar-brand ps-3" href="dashboard_admin.php">Ticketing Helpdesk</a>
        <button class="float-end btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-5">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile <i class="ms-2 fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!"><?php echo $username ?></a></li>
                    <li><a class="dropdown-item" href="#!"><?php echo $unit ?></a></li>
                </ul>
            </li>
        </ul>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto d-block">

                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-navy text-center mb-4">Formulir Edit tiket</h3>

                        

                            <form action="config/proses_edit.php" method="POST">
                                <div class="row">

                                    <div class="col-12">
                                        <input type="hidden" name="id_tiket" value="<?php echo $tiket['id_tiket'] ?>" readonly/>
                                        <input type="hidden" name="id_admin" value="<?php echo $tiket['id_admin'] ?>" readonly/>
                                        <input type="hidden" name="id_teknisi" value="<?php echo $id_teknisi ?>" readonly/>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Report By</label>
                                        <input type="text"  class="form-control" name="report_by" value="<?php echo $tiket['report_by'] ?>" readonly />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Assign to</label>
                                        <input type="text"  class="form-control" name="asign_to" value="<?php echo $tiket['asign_to'] ?>" readonly/>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label"> Teknisi</label>
                                        <input type="text"  class="form-control"  name="teknisi" value="<?php echo $tiket['teknisi'] ?>"  readonly/>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label"> Deskripsi Helpdesk</label>
                                        <input type="text" class="form-control"  name="subject" value="<?php echo $tiket['subject'] ?>" readonly/>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Status</label>
                                        <select class="form-select" aria-label="Default select example" name="status">
                                            <option selected><?php echo $tiket['status'] ?></option>
                                            <option value="Diproses oleh Teknisi">Diproses oleh Teknisi</option>
                                            <option value="Selesai Diproses Teknisi">Selesai</option>
                                            <option value="Ditolak">Ditolak</option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label"> Update</label>
                                        <input type="text" class="form-control update-text-box"  name="update" value="<?php echo $tiket['update'] ?>" />
                                    </div>

                                    <div class="col-12 mt-4">
                                         <input type="submit" value="Simpan" name="simpan"  class="btn btn-success mx-auto d-block"/>
                                         <a href="dashboard.php" class="btn btn-secondary mx-auto d-block mt-3" style="min-width:100px; max-width:101px;"> Kembali</a>
                                    </div>

                                </div>  

                            </form>

                        

                    </div>

                </div>

            </div>
        </div>
    </div>





</body>

</html>