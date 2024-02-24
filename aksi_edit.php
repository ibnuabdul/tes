<?php
include 'koneksi.php';

$ProdukID=$_POST['ProdukID'];
$NamaProduk=$_POST['NamaProduk'];
$Harga=$_POST['Harga'];
$Stok=$_POST['Stok'];

mysqli_query($connection,"UPDATE produk SET NamaProduk='$NamaProduk', Harga='$Harga', Stok='$Stok' WHERE ProdukID='$ProdukID'");

?>
<script>
    alert('Berhasil Mengubah Data');
location.href="dashboard.php?page=Produk";
</script>