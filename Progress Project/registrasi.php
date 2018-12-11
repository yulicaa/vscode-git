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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo-icon.jpg">
  <title>SIRUSAK</title>

  <!-- Favicons -->
  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>
<section class="about" id="about">
    <div class="container">
          <div class="row">
              <div class="col-sm-12">
                <h2 class="text-center">Registrasi</h2>
              </div>
          </div>
          <form class="form-login"  method="post">
        <h2 class="form-login-heading">Daftar Akun</h2>
        <div class="login-wrap">
          <input name="Username" type="Username" class="form-control" placeholder="Username" autofocus>
          <br>
          <input name="Password" type="Password" class="form-control" placeholder="Password">
          <label class="checkbox">
            </label>
          <button class="btn btn-theme btn-block" type="submit"></i>Daftar</button>
          <hr>
        </div>
      </form>
    </div>
</section>
    
  <script src="../assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
  <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="js/jquery.slimscroll.js"></script>
  <!--Wave Effects -->
  <script src="js/waves.js"></script>
  <!--Menu sidebar -->
  <script src="js/sidebarmenu.js"></script>
  <!--stickey kit -->
  <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <!--Custom JavaScript -->
  <script src="js/custom.min.js"></script>
  <!-- ============================================================== -->
  <!-- Style switcher -->
  <!-- ============================================================== -->
  <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>  
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
  $.backstretch("img/login.jpg", {
    speed: 500
  });
  </script>
</body>

</html>
