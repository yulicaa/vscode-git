<?php
    require 'functions.php';
    // cek apakah button submit sudah di tekan atau belum

    // menggunakan method get untuk mengambil id yg telah terseleksi oleh user dan dimasukkan
    // ke dalam variabel baru yaitu $id
    // $id=$_GET["id"];
    // var_dump("$id");

    // // // query berdasarkan id
    // $mhs = query("SELECT * FROM mahasiswa WHERE id=$id");
    // var_dump($mhs);

    if(isset($_POST['submit']))
    {

    //cek sukses data ditambah menggunakan function tambah pada function.php
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
 // menggunakan method get untuk mengambil id yg telah terseleksi oleh user dan dimasukkan
    // ke dalam variabel baru yaitu $id
    $id=$_GET["id"];
    // var_dump($id);
     // // // query berdasarkan id
    $mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];
    // var_dump($mhs[0]["Nama"]);
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
              <li><a href="tambah.php" class="page-scroll">Tambah Data</a></li>
              <li class="active"><a href="#">Update Data</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->

          <div>
          <h1>Update Data Mahasiswa</h1>
          </div>
        </div><!-- /.container-fluid -->
      </nav>

    <section class="about" id="about">
    <div class="container">
          <div class="row">
              <div class="col-sm-12">
                <h2 class="text-center">Data Mahasiswa</h2>
                <hr>
              </div>
          </div>
    <form action="" method="post">
    <li>
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
    </li>
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="form-group">
                <!-- for pada label terhubung dengan id jadi jika label nama diklik maka textfield nama akan aktif juga-->
                <label for="Nama">Nama</label>
                <!-- untuk pengisian name besar kecilnya harus sesuai dengan fieldnya -->
                <input type="text" name="Nama" id="Nama" class="form-control" value = <?= $mhs["Nama"]; ?>> 
            </div>
            <div class="form-group">
                <label for="Nim">Nim</label>
                <input type="text" name="Nim" id="Nim"  class="form-control" required value = <?= $mhs["Nim"]; ?>>
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="text" name="Email" id="Email"  class="form-control" required value = <?= $mhs["Email"]; ?>>
            </div>    
            <div class="form-group">
                <label for="Jurusan">Jurusan</label>
                <input type="text" name="Jurusan" id="Jurusan" class="form-control" required value = <?= $mhs["Jurusan"]; ?>>
            </div>
            <div class="form-group">
                <label for="Gambar">Gambar</label>
                <input type="text" name="Gambar" id="Gambar" class="form-control" required value = <?= $mhs["Gambar"]; ?>>
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