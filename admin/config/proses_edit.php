<?php

include '../partials/config.php';
if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){


    // ambil data dari formulir
    $id_tiket = $_POST['id_tiket'];
    $id_admin = $_POST['id_admin'];
    $report_by = $_POST['report_by'];
    $asign_to = $_POST['asign_to'];
    $teknisi = $_POST['teknisi'];
    $subject = $_POST['subject'];
    $status = $_POST['status'];

    // buat query update
    $sql = "UPDATE tiket SET id_admin='$id_admin', report_by='$report_by', asign_to='$asign_to', teknisi='$teknisi', subject='$subject', status='$status' WHERE id_tiket=$id_tiket";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: ../sukses.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>