<?php
include 'koneksi.php';

     if(isset($_POST['register'])){

         $nama_petugas = $_POST['nama_petugas'];
         $username = $_POST['username'];
         $password = $_POST['password'];
         $level = $_POST['level'];

         $insert = mysqli_query($connection, "INSERT INTO petugas (nama_petugas,username,password,level) VALUES ('$nama_petugas','$username','$password','$level')");

         if($insert){
             echo 
             '<script>
                 alert("Registrasi Berhasil");
                 location.href="index.php";
             </script>';
        }else{
             echo 
             '<script>
                 alert("Registrasi Gagal");
             </script>';
     }
 }
?>