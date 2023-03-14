<?php 

include 'partials/register_admin.php';

?>


<!DOCTYPE html>
<html>

<head>
    <title>Formulir Register Admin </title>
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

                        

                            <form action="partials/register_admin.php" method="POST">
                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Username</label>
                                        <input type="text"  class="form-control" name="username" value="<?php echo $username ?>" required/>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label"> Email</label>
                                        <input type="text"  class="form-control"  name="email" value="<?php echo $email?>" required/>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label"> Password</label>
                                        <input type="password" class="form-control"  name="password" value="<?php echo $_POST['password']; ?>" />
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label"> Confirm Password</label>
                                        <input type="password" class="form-control"  name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required/>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label"> Nama</label>
                                        <input type="text"  class="form-control"  name="name" value="<?php echo $name; ?>" required>
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label"> Departmen</label>    
                                        <input type="text"  class="form-control"  name="departemen" value="<?php echo $dep; ?>" required>
                                    </div>

                                    <div class="col-12 mt-4">
                                         <input type="submit" value="Simpan" name="submit"  class="btn btn-success mx-auto d-block"/>
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