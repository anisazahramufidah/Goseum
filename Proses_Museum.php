<?php

include("Koneksi.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    $nama_pengunjung=$_POST['Nama Pengunjung'];
    $tanggal_kunjungan = $_POST['Tanggal Kunjungan'];
    $alamat_pengunjung = $_POST['Alamat Pengunjung'];
    $no_hp = $_POST['No Hp'];
    $kunjungan_museum = $_POST['Kunjungan Museum'];

    // buat query update
    $result = mysqli_query($mysqli, "UPDATE museum SET nama_pengunjung='$nama_pengunjung',tanggal_kunjungan='$tanggal_kunjungan',alamat_pengunjung='$alamat_pengunjung', no_hp='$no_hp', kunjungan_museum $kunjungan_museum WHERE id_museum=$id_museum");
    header('Location: View_Museum.php');

    // $query = mysqli_query($host, $sql);

    // apakah query update berhasil?
    // if( $query ) {
    //     // kalau berhasil alihkan ke halaman list-View_Museum.php
    //     header('Location: list-Museum.php');
    // } else {
    //     // kalau gagal tampilkan pesan
    //     die("Gagal menyimpan perubahan...");
    // }


} else {
    die("Akses dilarang...");
}

?>