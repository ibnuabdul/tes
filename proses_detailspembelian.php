<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$PenjualanID = $_POST['PenjualanID'];
$NamaProduk = $_POST['NamaProduk'];
$JumlahProduk = $_POST['JumlahProduk'];
$SubTotal = $_POST['SubTotal'];
 
// menginput data ke database
$query =mysqli_query($connection,"INSERT INTO penjualan VALUES ('','$TanggalPenjualan','$TotalHarga','$PenjualanID')");
$query =mysqli_query($connection,"INSERT INTO detailpenjualan VALUES ('','$PenjualanID','$ProdukID','$JumlahProduk','$SubTotal')");
    if(!empty($query)){
        echo '<script>
            alert("Data ditambahkan");
            window.location="detailspembelian.php";
            </script>'; 
    }
            ?>