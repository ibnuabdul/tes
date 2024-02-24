<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Dashboard Template · Bootstrap v4.6</title>


    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="assets//css/bootstrap.min.css" rel="stylesheet">



    <style>
  
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: url("bandung.jpg");
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      body{
        background-color: #grey;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="asset/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
  <div class="p-3 mb-2 bg-secondary text-white">Casual T-Shirt</div>

  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">

            
            <div class="card mt-2">
        <div class="card-body">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              <a href="insert.php" class="btn btn-primary ">Tambah Data</a>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              <a href="kategori.php" class="btn btn-success">Stok Barang</a>
            </a>
          </li>
         <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              <a href="index.php" class="btn btn-success">Data Pengguna</a>-->
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              <a href="tampilan.php" class="btn btn-success">Dashboard</a>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              <a href="pembelian.php" class="btn btn-success">Data Pelanggan</a>
            </a>
          </li>
           <!-- <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              <a href="logout.php" class="btn btn-danger">Keluar</a>-->
        </ul>
      </div>
      
    </nav>


    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2"></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            
        </div>
      </div>
      </div>
  
        <table class="table table-striped table-mt-2">
          <thead>
            <tr> 
              <th>No</th>
              <!--<th>id_user</th>-->
              <th>Nama produk</th>
              <th>Harga</th>
              <th>Stok</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
      include 'koneksi.php';
      $tampil_data=mysqli_query($connection,"SELECT * FROM produk");
      $no=0;
      while($row=mysqli_fetch_array($tampil_data)){
      $no++
      ?>
            <tr>
            <td><?php echo $no?></td>
              <!--<?php echo $row['produkID']?></td>-->
              <td><?php echo $row['NamaProduk']?></td>
              <td><?php echo $row['Harga']?></td>
              <td><?php echo $row['Stok']?></td>
              <td><a class="btn btn-primary" href="edit.php?ProdukID=<?php echo $row['ProdukID']?>">UBAH</a>
              <a class="btn btn-outline-success" href="aksi_delete.php?ProdukID=<?php echo $row['ProdukID']?>">HAPUS</a></td>
               
    </tr>
          </tbody>
          <?php
      }
          ?>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="asset/js/dashboard.js"></script>
  </body>
</html>