<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Signin Template · Bootstrap v4.6</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<form class="form-signin" method="post" action="proses_detailspembelian.php">
  <!--<img class="mb-4" src="assets/img/ibnu.jpg" alt="" width="72" height="72"> -->
  <h2 class="h3 mb-3 font-weight-normal">TAMBAH DATA</h2>
  <label for="inputEmail" class="sr-only">Pelanggan ID</label>
  <input type="text" id="text" name="PelangganID" value="<?php echo date("dmHis")?>" class="form-control" placeholder="Pelanggan ID" required autofocus>
  <label for="inputEmail" class="sr-only">Nama Produk</label>
  <input type="text" id="text" name="NamaProduk" class="form-control" placeholder="Nama Produk" required autofocus>
  <label for="inputNama" class="sr-only">Jumlah Beli</label>
  <input type="text" id="text" name="JumlahProduk" class="form-control" placeholder="Jumlah Produk" required>
  <label for="inputNama" class="sr-only">Total Harga</label>
  <input type="text" id="text" name="SubTotal"  class="form-control" placeholder="Total" required>
 <!-- <input type="text" id="text" name="TanggalPenjualan" value="<?php echo date("Y-m-d")?>" class="form-control" placeholder="Tanggal Penjualan" required>-->
  
  <div class="checkbox mb-3">
    <label>
    <!--  <input type="checkbox" value="remember-me"> Remember me -->
    </label>
  </div>
  <p><button class="btn btn-lg btn-primary btn-block" type="submit">Tambah Data</button></p>


  <!-- <p class="mt-5 mb-3 text-muted">&copy; </p> -->
</form>   
  </body>
</html>
