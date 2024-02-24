<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$PelangganID = $_POST['PelangganID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$NomorTelepon = $_POST['NomorTelepon'];
$Alamat = $_POST['Alamat'];
$TanggalPenjualan = $_POST['TanggalPenjualan'];
// menginput data ke database
mysqli_query($connection,"insert into pelanggan values('$PelangganID','$NamaPelanggan','$Alamat','$NomorTelepon')");
mysqli_query($connection,"insert into penjualan values('','$TanggalPenjualan','','$PelangganID')");

// mengalihkan halaman kembali ke data_barang.php
header("location:pembelian.php?pesan=simpan&&id=<?php echo $PelangganID?>");

?>