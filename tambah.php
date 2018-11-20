<?php
    // buat koneksi
    $conn = mysqli_connect("localhost","root","","phpdatabase");

    // cek apakah button submit sudah di tekan atau belum
    if(isset($_POST['submit']))
    {
        // cek isi dari post menggunakan vardump
        // var_dump($_POST);
        // var_dump($_FILES);
        // die();

        // ambil data dari tiap element dalam form yang disimpan di variabel baru
        $nama = $_POST["Nama"];
        $nim = $_POST["Nim"];
        $email = $_POST["Email"];
        $jurusan = $_POST["Jurusan"];
        // $gambar = $_POST["Gambar"];

        // query insert data
        $query = " INSERT INTO mahasiswa
                    VALUES
                    ('','$nama','$nim','$email','$jurusan','$gambar')";
        mysqli_query($conn,$query);

        // cek sukses data ditambah menggunakan mysqli_affected_rows
        // jika kita var_dump maka akan muncul int(1) jika gagal maka akan muncul int (-1)
        // var_dump(mysqli_affected_rows($conn));
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
              <li><a href="index.php" class="page-scroll">Daftar Mahasiswa</a></li>
              <li class="active"><a href="#">Tambah Data</a></li>
              <li><a href="edit.php" class="page-scroll">Update Data</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="registrasi.php"  class="page-scroll">Registrasi</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->

          <div>
          <h1>Tambah Data Mahasiswa</h1>
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
                <!-- for pada label terhubung dengan id jadi jika label nama diklik maka textfield nama akan aktif juga-->
                <label for="Nama">Nama</label>
                <!-- untuk pengisian name besar kecilnya harus sesuai dengan fieldnya -->
                <input type="text" name="Nama" id="Nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="Nim">Nim</label>
                <input type="text" name="Nim" id="Nim" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" name="Email" id="Email" class="form-control" required>
            </div>    
            <div class="form-group">
                <label for="Jurusan">Jurusan</label>
                <input type="text" name="Jurusan" id="Jurusan" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="Gambar">Gambar</label>
                <input type="file" name="Gambar" id="Gambar">
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