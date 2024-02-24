<?php
include 'koneksi.php';
if(isset($_GET['PelangganID'])){
    $PelangganID= $_GET['PelangganID'];

    $query = "DELETE FROM pelanggan WHERE PelangganID='$PelangganID'";
    $result = mysqli_query($connection,$query);
}
?>
<script>
    alert('Berhasil Menghapus Data');
location.href="pembelian.php?page=pelanggan";
</script>
