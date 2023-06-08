<?php
include 'View_Pengunjung.php';

// Get data to delete
$id_pengunjung = $_GET['Id Pengunjung'];
$nama_pengunjung = $_GET['Nama Pengunjung'];
$tanggal_kunjungan = $_GET['Tanggal Kunjungan'];
$alamat_pengunjung = $_GET['Alamat Pengunjung'];
$no_hp = $_GET['No Hp'];
$kunjungan_museum = $_GET['Kunjungan Museum'];

// Perform delete operation
$sql = "DELETE FROM pengunjung WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
