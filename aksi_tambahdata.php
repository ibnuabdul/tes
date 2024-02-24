<?php
    include 'koneksi.php';
    $NamaProduk = $_POST['NamaProduk'];
    $Harga = $_POST['Harga'];
    $Stok = $_POST['Stok'];

    $query =mysqli_query($connection,"INSERT INTO produk VALUES ('','$NamaProduk','$Harga','$Stok')");
    if(!empty($query)){
        echo '<script>
            alert("Data ditambahkan");
            window.location="dashboard.php";
            </script>'; 
    }
            ?>
