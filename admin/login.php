<?php 
  include 'veritabani/baglan.php'; 
if(isset($_SESSION["kullanici_adi"]) && isset($_SESSION["kullanici_sifre"])){
  header("Location:index.php");
  die;
}
  $ayarsor=$database->prepare("SELECT * FROM ayarlar WHERE ayar_id=1");
  $ayarsor->execute();
  $ayar=$ayarsor->fetch();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $ayar["ayar_baslik"]; ?> Giriş Yap </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a><b><?php echo $ayar["ayar_baslik"] ?></b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Giriş yapmak için bilgilerinizi girin.</p>
      <?php 
      @$kontrol=$_GET["kontrol"];

      if($kontrol=="bulunamadi"){?>
          <div class="alert alert-danger">
            Kullanıcı bulunamadı.
         </div>
      <?php }elseif($kontrol=="erisimyok"){?>
        <div class="alert alert-danger">
           Admin sayfasına erişim izni yok.
         </div>
      <?php }elseif($kontrol=="cikis"){?>
        <div class="alert alert-success">
         Çıkış yapıldı.
         </div>
      <?php } ?>
      <form action="admin_giris/login.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="kullanici_adi" placeholder="Kullanıcı adı">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="kullanici_sifre" placeholder="Şifreniz">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
          </div>
          <!-- /.col -->
        </div>
      </form> 
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
