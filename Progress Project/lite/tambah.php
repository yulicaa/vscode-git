<?php
    // buat koneksi
    $conn = mysqli_connect("localhost","root","","databasers");


    if(isset($_POST['submit']))
    {
        $kode = $_POST["Kode"];
        $nama = $_POST["Nama"];
        $gender = $_POST["Gender"];
        $alamat = $_POST["Alamat"];
        $notelp = $_POST["No_Telepon"];

        // query insert data
        $query = " INSERT INTO pasien
                    VALUES
                    ('','$nama','$kode','$gender','$alamat','$notelp')";
        mysqli_query($conn,$query);

        if(mysqli_affected_rows($conn) > 0) {
            echo "
            <script>
        alert('data berhasil disimpan');
        document.location.href = 'index.php';
        </script>
        ";
        }
        else {
            echo "
            <script>
            alert('data gagal disimpan');
            document.location.href = 'index.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
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
              <li class="active"><a href="#">Tambah Data</a></li>
              <li><a href="edit.php" class="page-scroll">Update Data</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="registrasi.php"  class="page-scroll">Registrasi</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->

          <div>
          <h1>Tambah Data</h1>
          </div>
        </div><!-- /.container-fluid -->
      </nav>

    <section class="about" id="about">
    <div class="container">
          <div class="row">
              <div class="col-sm-12">
                <h2 class="text-center">Data Mahasiswa Baru</h2>
                <hr>
              </div>
          </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="form-group">
                <label for="Kode">Kode</label>
                <input type="text" name="Kode" id="Kode" class="form-control" required>
            </div> 
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Gender">Jenis Kelamin</label>
                <input type="text" name="Gender" id="Gender" class="form-control" required>
            </div>    
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <input type="text" name="Alamat" id="Alamat" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="No_Telepon">No Telepon</label>
                <input type="text" name="No_Telepon" id="No_Telepon" class="form-control">
            </div>
                <button type="submit" name="submit" class="btn btn-primary"> Tambah </button>
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