<?php
 require 'functions.php';

if(isset($_POST["register"]))
{
    if(registrasi($_POST)>0)
    {
        echo "
        <style>
            alert('user berhasil ditambahkan');
        </style>
        ";
    }else
    {
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
    <title>Form Registrasi</title>
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
                <li><a href="edit.php" class="page-scroll">Update Data</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#">Registrasi</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->

          <div>
          <h1>Halaman Registrasi</h1>
          </div>
        </div><!-- /.container-fluid -->
      </nav>

    <section class="about" id="about">
    <div class="container">
          <div class="row">
              <div class="col-sm-12">
                <h2 class="text-center">Registrasi</h2>
                <hr>
              </div>
          </div>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="form-group">
                        <label for="username" class="col-md-3 col-md-offset-2 control-label">Username</label>
                        <div class="col-md-5">
                        <input type="text" class="form-control" name="username" id="username" placeholder="masukkan username">
                        </div>
                    </div>
                    <br>    
                    <div class="form-group">
                        <label for="password" class="col-md-3 col-md-offset-2 control-label">Password</label>
                        <div class="col-md-5">
                        <input type="password" class="form-control" name="password" id="password">
                        </div>
                    </div>
                    <br> 
                    <div class="form-group">
                        <label for="password2" class="col-md-3 col-md-offset-2 control-label">Konfirmasi Password</label>
                        <div class="col-md-5">
                        <input type="password" class="form-control" name="password2" id="password2">
                        </div>
                    </div>
                    <br>
                    <div class="col-md-2 col-md-offset-9 ">
                        <button type="submit" name="register" class="btn btn-primary"> Registrasi </button>
                    </div>
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