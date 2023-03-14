<?php

$server = "localhost";
$user = "u1249867_TI53";
$password = "b4635teh";
$nama_database = "u1249867_help_desk";


$dbs = mysqli_connect($server, $user, $password, $nama_database);

if( !$dbs ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
$sql = "SELECT * FROM tiket where id_user = $id_users ";
$query = mysqli_query($dbs, $sql);

while($tiket = mysqli_fetch_array($query)){
    $id_user = $_POST['id_user'];
    $id_teknisi = $_POST['id_teknisi'];
    $id_admin = $_POST['id_admin'];
    $tanggal = $_POST['tanggal'];
    $report_by = $_POST['report_by'];
    $asign_to = $_POST['asign_to'];
    $teknisi = $_POST['teknisi'];
    $subject = $_POST['subject'];
    $status = $_POST['status'];
}
?>