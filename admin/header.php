<?php 
  include 'veritabani/baglan.php'; 
  $kullanici_adi=$_SESSION["kullanici_adi"];
  $kullanici_sifre=$_SESSION["kullanici_sifre"];
  $yonetici_sor=$database->prepare("SELECT * FROM yoneticiler WHERE yonetici_kullanici_adi= ? AND yonetici_sifre= ?");
  $yonetici_sor->execute(array($kullanici_adi, $kullanici_sifre));
  $yonetici=$yonetici_sor->fetch();

  if(empty($_SESSION["kullanici_adi"]) || empty($_SESSION["kullanici_sifre"])){
      header("Location:login.php?kontrol=erisimyok");
      die;
  }
  $ayarsor=$database->prepare("SELECT * FROM ayarlar WHERE ayar_id=1");
  $ayarsor->execute();
  $ayar=$ayarsor->fetch(); 


$_SESSION["eski_logo_url"]=$ayar["ayar_logo"];

?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $ayar["ayar_baslik"];  ?> Admin Paneli </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <!-- Bu dosya ikonları çekmeni sağlayan dosya -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">


  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo substr($ayar["ayar_logo"],3); ?>"  height="60" width="60">
  </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo substr($ayar["ayar_logo"],3); ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"><?php echo $ayar["ayar_baslik"];  ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $yonetici["yonetici_adi"]." ".$yonetici["yonetici_soyadi"]; ?></a>
          <a href="logout.php" style="color:black;" class="btn btn-warning btn-xs btn-block">Çıkış Yap</a>
        </div>
      </div>
 

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>
                  Anasayfa 
                </p>
              </a> 
           </li>
           <li class="nav-item">
              <a href="hizmetler.php" class="nav-link">
                <i class="nav-icon fas fa-bars"></i>
                <p>
                  Hizmetler 
                </p>
              </a> 
           </li>
           <li class="nav-item">
              <a href="haberler.php" class="nav-link">
                  <i class="fa fa-newspaper" aria-hidden="true"></i>
                  <p>
                    Haberler
                  </p>
              </a> 
           </li>
              <li class="nav-item">
              <a href="galeri.php" class="nav-link">
                <i class="nav-icon fas fa-image"></i>
                <p>
                  Galeri 
                </p>
              </a> 
           </li>
           <li class="nav-item">
              <a href="slaytlar.php" class="nav-link">
                <i class="nav-icon fas fa-image"></i>
                <p>
                  Slaytlar 
                </p>
              </a> 
           </li>
           <li class="nav-item">
              <a href="referanslar.php" class="nav-link">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  Referanslar 
                </p>
              </a> 
           </li>
           <li class="nav-item">
              <a href="ayar_guncelle.php" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                  Ayarlar 
                </p>
              </a> 
           </li>
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>