<?php

include '../partials/config.php';

if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

if(isset($_POST['simpan'])){



    $id_tiket = $_POST['id_tiket'];
    $id_admin = $_POST['id_admin'];
    $id_teknisi = $_POST['id_teknisi'];
    $report_by = $_POST['report_by'];
    $asign_to = $_POST['asign_to'];
    $teknisi = $_POST['teknisi'];
    $subject = $_POST['subject'];
    $status = $_POST['status'];

    $sql = "UPDATE tiket SET id_admin='$id_admin', id_teknisi='$id_teknisi', report_by='$report_by', asign_to='$asign_to', teknisi='$teknisi', subject='$subject', status='$status' WHERE id_tiket=$id_tiket";
    $query = mysqli_query($conn, $sql);

    
    if( $query ) {
        header('Location: ../sukses.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>