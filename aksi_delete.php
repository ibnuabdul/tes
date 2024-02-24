<?php
include 'koneksi.php';
if(isset($_GET['ProdukID'])){
    $ProdukID= $_GET['ProdukID'];

    $query = "DELETE FROM produk WHERE ProdukID='$ProdukID'";
    $result = mysqli_query($connection,$query);
}
?>
<script>
    alert('Berhasil Menghapus Data');
location.href="dashboard.php?page=Produk";
</script>
