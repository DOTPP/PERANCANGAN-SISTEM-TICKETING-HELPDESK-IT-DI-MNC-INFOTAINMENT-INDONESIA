
<!-- Modal Total-->
<div class="modal fade" id="total" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Total Request</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div id="tables" class="mt-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Tiket
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple1">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Report By</th>
                                        <th>asign to</th>
                                        <th>teknisi</th>
                                        <th>Subject</th>
                                        <th>Status</th>
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
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php

                                    include 'config/config.php';

                                    if (!$conn) {
                                        die("Gagal terhubung dengan database: " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM tiket where id_user = $id_users ";
                                    $query = mysqli_query($conn, $sql);

                                    while ($tiket = mysqli_fetch_array($query)) {

                                        echo "<tr>";

                                        echo "<td>" . $tiket['tanggal'] . "</td>";
                                        echo "<td>" . $tiket['report_by'] . "</td>";
                                        echo "<td>" . $tiket['asign_to'] . "</td>";
                                        echo "<td>" . $tiket['teknisi'] . "</td>";
                                        echo "<td>" . $tiket['subject'] . "</td>";
                                        echo "<td>" . $tiket['status'] . "</td>";

                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal menunggukonfirm-->
<div class="modal fade" id="menunggukonfirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="menunggukonfirmLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="menunggukonfirmLabel">Total Request Menunggu Konfirmasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div id="tables" class="mt-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Tiket
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple2">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Report By</th>
                                        <th>asign to</th>
                                        <th>teknisi</th>
                                        <th>Subject</th>
                                        <th>Status</th>
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
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php

                                    include 'config/config.php';

                                    if (!$conn) {
                                        die("Gagal terhubung dengan database: " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM tiket where id_user=$id_users AND status=' Menunggu Konfirmasi Admin'";
                                    $query = mysqli_query($conn, $sql);

                                    while ($tiket = mysqli_fetch_array($query)) {

                                        echo "<tr>";

                                        echo "<td>" . $tiket['tanggal'] . "</td>";
                                        echo "<td>" . $tiket['report_by'] . "</td>";
                                        echo "<td>" . $tiket['asign_to'] . "</td>";
                                        echo "<td>" . $tiket['teknisi'] . "</td>";
                                        echo "<td>" . $tiket['subject'] . "</td>";
                                        echo "<td>" . $tiket['status'] . "</td>";

                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal menunggukonfirm-->
<div class="modal fade" id="diprosesadmin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="diprosesadminLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="diprosesadminLabel">Total Request Diproses Admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div id="tables" class="mt-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Tiket
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple2">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Report By</th>
                                        <th>asign to</th>
                                        <th>teknisi</th>
                                        <th>Subject</th>
                                        <th>Status</th>
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
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php

                                    include 'config/config.php';

                                    if (!$conn) {
                                        die("Gagal terhubung dengan database: " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM tiket where id_user = $id_users AND status='Diproses oleh Admin'";
                                    $query = mysqli_query($conn, $sql);

                                    while ($tiket = mysqli_fetch_array($query)) {

                                        echo "<tr>";

                                        echo "<td>" . $tiket['tanggal'] . "</td>";
                                        echo "<td>" . $tiket['report_by'] . "</td>";
                                        echo "<td>" . $tiket['asign_to'] . "</td>";
                                        echo "<td>" . $tiket['teknisi'] . "</td>";
                                        echo "<td>" . $tiket['subject'] . "</td>";
                                        echo "<td>" . $tiket['status'] . "</td>";

                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal diproses Teknisi-->
<div class="modal fade" id="diprosesteknisi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="diprosesteknisiLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="diprosesteknisimLabel">Total Request Diproses</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div id="tables" class="mt-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Tiket
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple3">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Report By</th>
                                        <th>asign to</th>
                                        <th>teknisi</th>
                                        <th>Subject</th>
                                        <th>Status</th>
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
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php

                                    include 'config/config.php';
                                    
                                    if (!$conn) {
                                        die("Gagal terhubung dengan database: " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM tiket where id_user = $id_users AND status='Diproses oleh Teknisi'";
                                    $query = mysqli_query($conn, $sql);

                                    while ($tiket = mysqli_fetch_array($query)) {

                                        echo "<tr>";

                                        echo "<td>" . $tiket['tanggal'] . "</td>";
                                        echo "<td>" . $tiket['report_by'] . "</td>";
                                        echo "<td>" . $tiket['asign_to'] . "</td>";
                                        echo "<td>" . $tiket['teknisi'] . "</td>";
                                        echo "<td>" . $tiket['subject'] . "</td>";
                                        echo "<td>" . $tiket['status'] . "</td>";

                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal Tiket Selesai-->
<div class="modal fade" id="tiketselesai" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="tiketselesaiLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tiketselesaiLabel">Total Request Selesai Diproses</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div id="tables" class="mt-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Tiket
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple4">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Report By</th>
                                        <th>asign to</th>
                                        <th>teknisi</th>
                                        <th>Subject</th>
                                        <th>Status</th>
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
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php

include 'config/config.php';
                                    
if (!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
                                    $sql = "SELECT * FROM tiket where id_user = $id_users AND status='Selesai Diproses Teknisi'";
                                    $query = mysqli_query($conn, $sql);

                                    while ($tiket = mysqli_fetch_array($query)) {

                                        echo "<tr>";

                                        echo "<td>" . $tiket['tanggal'] . "</td>";
                                        echo "<td>" . $tiket['report_by'] . "</td>";
                                        echo "<td>" . $tiket['asign_to'] . "</td>";
                                        echo "<td>" . $tiket['teknisi'] . "</td>";
                                        echo "<td>" . $tiket['subject'] . "</td>";
                                        echo "<td>" . $tiket['status'] . "</td>";

                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>



<!-- Modal Tiket Ditolak-->
<div class="modal fade" id="ditolak" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ditolakLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ditolakLabel">Total Request Ditolak</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div id="tables" class="mt-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Tiket
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple5">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Report By</th>
                                        <th>asign to</th>
                                        <th>teknisi</th>
                                        <th>Subject</th>
                                        <th>Status</th>
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
                                    </tr>
                                </tfoot>
                                <tbody>

                                    <?php

                                    include 'config/config.php';
                                                                        
                                    if (!$conn) {
                                        die("Gagal terhubung dengan database: " . mysqli_connect_error());
                                    }
                                    $sql = "SELECT * FROM tiket where  id_user = $id_users AND status='Ditolak'";
                                    $query = mysqli_query($conn, $sql);

                                    while ($tiket = mysqli_fetch_array($query)) {

                                        echo "<tr>";

                                        echo "<td>" . $tiket['tanggal'] . "</td>";
                                        echo "<td>" . $tiket['report_by'] . "</td>";
                                        echo "<td>" . $tiket['asign_to'] . "</td>";
                                        echo "<td>" . $tiket['teknisi'] . "</td>";
                                        echo "<td>" . $tiket['subject'] . "</td>";
                                        echo "<td>" . $tiket['status'] . "</td>";

                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div>


<script>
    window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple = document.getElementById('datatablesSimple1');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
    });

    window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple = document.getElementById('datatablesSimple2');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
    });


    window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple = document.getElementById('datatablesSimple3');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
    });

    window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple = document.getElementById('datatablesSimple4');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
    });

    window.addEventListener('DOMContentLoaded', event => {
        const datatablesSimple = document.getElementById('datatablesSimple5');
        if (datatablesSimple) {
            new simpleDatatables.DataTable(datatablesSimple);
        }
    });
</script>