<?php
    require 'functions.php';

    if(isset($_POST['submit']))
    {

    if (edit($_POST)>0) 
    {
        echo "
        <script>
            alert('data berhasil diperbaharui');
            document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diperbaharui');
            document.location.href='edit.php';
        </script>";
        echo "<br>";
        echo mysqli_error($conn);
    }
    
    }
?>

<?php 

    $id=$_GET["id"];

    $pasien = query("SELECT * FROM pasien WHERE id=$id")[0];

?>

<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="#home" class="navbar-brand page-scroll">WEB</a>
          </div>
      
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="index.php" class="page-scroll">Daftar Pasien</a></li>
              <li><a href="tambah.php" class="page-scroll">Tambah Data</a></li>
              <li class="active"><a href="#">Update Data</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="registrasi.php" class="page-scroll">Registrasi</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->

          <div>
          <h1>Update Data</h1>
          </div>
        </div><!-- /.container-fluid -->
      </nav>

    <section class="about" id="about">
    <div class="container">
          <div class="row">
              <div class="col-sm-12">
                <h2 class="text-center">Data Pasien</h2>
                <hr>
              </div>
          </div>
    <form action="" method="post" enctype="multipart/form-data">
    <li>
        <input type="hidden" name="id" value="<?= $pasien["id"]; ?>">

    </li>
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="form-group">
                <label for="Kode">Kode</label>
                <input type="text" name="Kode" id="Kode"  class="form-control" required value = <?= $pasien["Kode"]; ?>>
            </div>
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" class="form-control" value = <?= $pasien["Nama"]; ?>> 
            </div>
            <div class="form-group">
                <label for="Gender">Jenis Kelamin</label>
                <input type="text" name="Gender" id="Gender"  class="form-control" required value = <?= $pasien["Gender"]; ?>>
            </div>    
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" required value = <?= $pasien["Alamat"]; ?>>
            </div>
            <div class="form-group">
                <label for="No_Telepon">No Telepon</label>
                <input type="text" name="No_Telepon" id="No_Telepon" class="form-control" required value = <?= $pasien["No_Telepon"]; ?>>
            </div>
                <button type="submit" name="submit" class="btn btn-primary"> Update </button>
        </div>  
        </div>
    </form>
    </div>
    </section>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
</body>
</html>