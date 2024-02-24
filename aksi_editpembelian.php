<?php
include 'koneksi.php';
$PelangganID=$_POST['PelangganID'];
$NamaPelanggan=$_POST['NamaPelanggan'];
$Alamat=$_POST['Alamat'];
$NomorTelepon=$_POST['NomorTelepon'];

mysqli_query($connection,"UPDATE pelanggan SET NamaPelanggan='$NamaPelanggan', Alamat='$Alamat', NomorTelepon='$NomorTelepon' WHERE PelangganID='$PelangganID'");
?>
<script>
    alert('Berhasil Mengubah Data');
location.href="pembelian.php?page=pelanggan";
</script>

