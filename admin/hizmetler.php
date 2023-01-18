<?php include 'header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Anasayfa</h1>
          </div><!-- /.col -->
      
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
       
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <div class="col-md-3"></div>
         <div class="card col-md-6">
              <div class="card-header">
                <h3 class="card-title"><strong>Hizmetler</strong></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="panel/islem.php" method="post" enctype="multipart/form-data">
              <?php
              @$kontrol = $_GET['kontrol'];

              if ($kontrol == 'uzanti') { ?>
                    <div class="alert alert-danger">
                       JPG, PNG, WEBP uzantılı dosyalardan bir tanesini seçin.
                    </div>
                <?php } elseif ($kontrol == 'boyut') { ?>
                    <div class="alert alert-danger">
                    Dosya boyutunuz 2MB'dan büyük olamaz.
                    </div>
                <?php } elseif ($kontrol == 'basarili') { ?>
                    <div class="alert alert-success">
                  Hizmet eklendi.
                    </div>
                <?php } elseif ($kontrol == 'basarisiz') { ?>
                    <div class="alert alert-danger">
                  Hizmet eklenemedi.
                    </div>
                <?php }
              ?>

                <div class="card-body">
                
                <div class="form-group">
                    <label for="">Yeni Resim Seç</label>
                    <input type="file" name="yeniresim" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="">Başlık</label>
                    <input type="text" class="form-control" name="baslik" placeholder="Başlık Girin">
                  </div>
                  <div class="form-group">
                    <label for="">Detay</label>
                     <textarea name="detay" class="form-control" cols="30" rows="10"></textarea>
                  </div> 
                </div>
                <!-- /.card-body --> 
                <div class="card-footer">
                  <button type="submit" name="hizmetekle" class="btn btn-secondary">Kaydet</button>
                </div>
              </form>
            </div> 
        </div>
        <div class="col-md-3"></div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <?php include 'footer.php'; ?>
