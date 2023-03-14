<?php

include '../partials/config.php'

if( !$conn ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}


// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['request'])){


    $id_user = filter_input(INPUT_POST, 'id_user', FILTER_DEFAULT);
    $id_teknisi = filter_input(INPUT_POST, 'id_teknisi', FILTER_DEFAULT);
    $id_admin = filter_input(INPUT_POST, 'id_admin', FILTER_DEFAULT);
    $tanggal = filter_input(INPUT_POST, 'tanggal', FILTER_DEFAULT);
    $report_by = filter_input(INPUT_POST, 'report_by', FILTER_DEFAULT);
    $asign_to = filter_input(INPUT_POST, 'asign_to', FILTER_DEFAULT);
    $teknisi = filter_input(INPUT_POST, 'teknisi', FILTER_DEFAULT);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_DEFAULT);
    $status = filter_input(INPUT_POST, 'status', FILTER_DEFAULT);

    // ambil data dari formulir
    $id_user = $_POST['id_user'];
    $id_teknisi = $_POST['id_teknisi'];
    $id_admin = $_POST['id_admin'];
    $tanggal = $_POST['tanggal'];
    $report_by = $_POST['report_by'];
    $asign_to = $_POST['asign_to'];
    $teknisi = $_POST['teknisi'];
    $subject = $_POST['subject'];
    $status = $_POST['status'];

    // buat query
    $sql = "INSERT INTO tiket (id_user, id_teknisi, id_admin, tanggal, report_by, asign_to, teknisi, subject, status ) 
    VALUE ('$id_user', '$id_teknisi', '$id_admin', '$tanggal', '$report_by', '$asign_to', '$teknisi', '$subject', ' $status')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil  muncul notif berhasil
        // echo "<script>alert('Selamat, data berhasil disimpan!')</script>";
        header('Location: ../sukses.php');
    } else {
        // kalau gagal  muncul notif  status=gagal
        // header('Location: ../gagal.php');
        // echo "<script>alert('yahh, Coba lagi data gagal diinput!')</script>";
        header('Location: ../gagal.php');
    }


} else {
    die("Akses dilarang...");
}

?>