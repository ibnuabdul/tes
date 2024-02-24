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
  <?php
include 'koneksi.php';
$ProdukID = $_GET['ProdukID'];
$data = mysqli_query($connection,"SELECT * FROM produk where ProdukID='$ProdukID'");
while($row = mysqli_fetch_array($data)){
    ?>

    
<form class="form-signin" method="POST" action="aksi_edit.php">
  <!--<img class="mb-4" src="assets/img/ibnu.jpg" alt="" width="72" height="72"> -->
  <h1 class="h3 mb-3 font-weight-normal">SILAHKAN EDIT</h1>
  <input type="hidden" name="ProdukID" value="<?php echo $row['ProdukID'];?>">
  <label for="text" class="sr-only">Nama Produk</label>
  <input type="text" id="inputNamaProduk" value="<?php echo $row['NamaProduk']; ?>" name="NamaProduk" class="form-control" placeholder="NamaProduk" required autofocus>
  <label for="text" class="sr-only">Harga</label>
  <input type="text" id="inputHarga" value="<?php echo $row['Harga']; ?>" name="Harga" class="form-control" placeholder="Harga" required autofocus>
  <label for="text" class="sr-only">Stok</label>
  <input type="text" id="inputStok" value="<?php echo $row['Stok']; ?>" name="Stok" class="form-control" placeholder="Stok" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">EDIT</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2017-2022</p>
</form>
<?php }?>
  </body>
</html>
