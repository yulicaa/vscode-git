<?php
 require 'functions.php';
 $mahasiswa=query("SELECT * FROM mahasiswa");

//  tombol cari ditekan
// cari pada line 7 adalah nama dari button
if(isset($_POST["cari"]))
{
    // cari line 10adalah function dan keyword adalah nama dari inputan text
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en" id="home">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
              <li class="active"><a href="#"> Daftar Mahasiswa </a></li>
              <li><a href="tambah.php" class="page-scroll">Tambah Data</a></li>
              <li><a href="edit.php" class="page-scroll">Update Data</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->

          <div>
          <h1>Daftar Mahasiswa</h1>
          </div>
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container" align= "center">
    <form action="" method="post">
        <!-- autofocus atribut pada html 5 yang digunakan untuk memberikan tanda pertama kali ke inputan pada saat page di reload -->
        <!-- placeholder atribut yang digunakan untuk menampilkan tulisan pada textbox-->
        <!-- autocomplete digunakan agar history pencarian dari user lain tidak ada-->

        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari" class="btn btn-primary"> Cari </button>
    </form>
    <br>
    </div>

    <div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Nim</th>
                <th>Email</th>
                <th>Jurusan</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
        <?php $i=1 ?>
            <?php foreach($mahasiswa as $row):?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row["Nama"]; ?></td>
                    <td><?= $row["Nim"]; ?></td>
                    <td><?= $row["Email"]; ?></td>
                    <td><?= $row["Jurusan"]; ?></td>
                    <td>
                    <img src="img/<?php echo $row["Gambar"];?>" alt="" heigth="100" width="100" srcset=""></td>
                    <td>
                    <a href="edit.php?id=<?php echo $row["id"];?>">Edit</a>
                    <a href="hapus.php?id=<?php echo $row["id"];?>"onclick="return confirm('Apakah data ini akan dihapus')">Hapus</a>
                    </td>
                </tr>
            <?php $i++ ?>
        <?php endforeach;?>
        </tbody>
    </table>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
</body>
</html>